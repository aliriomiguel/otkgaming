@component('mail::message')
{{-- # Introduction --}}

The body of your message.
<div>
    <strong>Name</strong> {{$data['name']}}
</div>
<div>
    <strong>Email</strong> {{$data['email']}}
</div>
<div>
    <strong>Phone</strong> {{$data['phone']}}
</div>
<div>
    <strong>Message</strong> {{$data['content']}}
</div>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }} --}}
@endcomponent
