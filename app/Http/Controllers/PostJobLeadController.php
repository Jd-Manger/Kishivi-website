<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Throwable;

class PostJobLeadController extends Controller
{
    private string $receiverEmail;

    public function __construct()
    {
        $this->receiverEmail = (string) Config::get(
            'mail.contact_receiver',
            'Info@kishviconsulting.com'
        );
    }

    public function store(Request $request): JsonResponse
    {
        $mailer = Config::get('mail.default');

        if (in_array($mailer, ['log', 'array'], true)) {
            return response()->json([
                'ok' => false,
                'message' => 'Email service not configured. Please set SMTP in .env.',
            ], 500);
        }

        $data = $request->validate([
            'company_name' => ['required', 'string', 'max:120'],
            'contact_person' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'phone' => ['required', 'string', 'max:30'],
            'job_role' => ['required', 'string', 'max:180'],
            'hiring_count' => ['nullable', 'string', 'max:50'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        $mailBody = implode("\n", [
            'New Post a Job lead submitted from website.',
            '',
            'Company Name: '.$data['company_name'],
            'Contact Person: '.$data['contact_person'],
            'Email: '.$data['email'],
            'Phone: '.$data['phone'],
            'Job Role: '.$data['job_role'],
            'Hiring Count: '.($data['hiring_count'] ?? 'N/A'),
            'Message: '.($data['message'] ?? 'N/A'),
            '',
            'Submitted At: '.now()->toDateTimeString(),
        ]);

        try {
            Mail::raw($mailBody, function ($message) use ($data): void {
                $message
                    ->to($this->receiverEmail)
                    ->subject('New Post a Job Lead - Kishvi Consulting')
                    ->replyTo($data['email'], $data['contact_person']);
            });
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'ok' => false,
                'message' => 'Unable to send email right now. Please try again shortly.',
            ], 500);
        }

        return response()->json([
            'ok' => true,
            'message' => 'Query received successfully.',
        ]);
    }

    public function applyJob(Request $request): JsonResponse
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'phone' => ['required', 'string', 'max:30'],
            'job_role' => ['required', 'string', 'max:180'],
            'experience' => ['nullable', 'string', 'max:80'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        $mailBody = implode("\n", [
            'New Apply Job lead submitted from website.',
            '',
            'Full Name: '.$data['full_name'],
            'Email: '.$data['email'],
            'Phone: '.$data['phone'],
            'Job Role: '.$data['job_role'],
            'Experience: '.($data['experience'] ?? 'N/A'),
            'Message: '.($data['message'] ?? 'N/A'),
            '',
            'Submitted At: '.now()->toDateTimeString(),
        ]);

        try {
            Mail::raw($mailBody, function ($message) use ($data): void {
                $message
                    ->to($this->receiverEmail)
                    ->subject('New Apply Job Lead - Kishvi Consulting')
                    ->replyTo($data['email'], $data['full_name']);
            });
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'ok' => false,
                'message' => 'Unable to send email right now. Please try again shortly.',
            ], 500);
        }

        return response()->json([
            'ok' => true,
            'message' => 'Application submitted successfully.',
        ]);
    }

    public function contactLead(Request $request): JsonResponse
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:120'],
            'last_name' => ['nullable', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'phone' => ['nullable', 'string', 'max:30'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        $mailBody = implode("\n", [
            'New Contact form query submitted from website.',
            '',
            'First Name: '.$data['first_name'],
            'Last Name: '.($data['last_name'] ?? 'N/A'),
            'Email: '.$data['email'],
            'Phone: '.($data['phone'] ?? 'N/A'),
            'Message: '.$data['message'],
            '',
            'Submitted At: '.now()->toDateTimeString(),
        ]);

        try {
            Mail::raw($mailBody, function ($message) use ($data): void {
                $message
                    ->to($this->receiverEmail)
                    ->subject('New Contact Query - Kishvi Consulting')
                    ->replyTo($data['email'], $data['first_name']);
            });
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'ok' => false,
                'message' => 'Unable to send email right now. Please try again shortly.',
            ], 500);
        }

        return response()->json([
            'ok' => true,
            'message' => 'Query received successfully.',
        ]);
    }
}
