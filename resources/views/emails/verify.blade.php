<!DOCTYPE html>
<html>
<head>
</head>
<body class="body" style="background:#eef0f1;">
<div style="padding:25px ;margin-right: auto;margin-left: auto;">
    <div style="background:#fff; color:#000; max-width: 100%;  padding: 20px 0px 20px 25px;border-radius: 15px;">
        <div  style="text-align:center;">
            <h1 style="color:#000;  margin-right : 25px;">
                CAT
            </h1>
        </div>
        <h1 style="font-size:150%; color:#000;">
            Dear {{ $first_name}},
        </h1>
        <p style="font-size:120%; color:#000;">
            You've successfully signed up for <a href="{{url('/')}}">cat.com</a>.
        </p>
        <p style="font-size:120%; color:#000;">
            We're ready to activate your account. All we need to do is make sure this is your email address.
        </p>
        <div style="text-align:center;">
            <a href="{{ url('/auth/register/verify/'.$id.'/'.$confirmation_code) }}">
                <button type="button" style="color: #fff; background-color: #5cb85c;border-color: #4cae4c;color: #fff;background-color: #449d44;border-color: #398439;background-color: #5cb85c;padding: 10px 16px;font-size: 18px;line-height: 1.33;border-radius: 6px; ">
                    VERIFY ADDRESS
                </button>
            </a>
        </div>
        <p style="font-size:85%; color:#444;">
            Having Troubles? Copy this url to your browser:<a href="{{ url('/auth/register/verify/'.$id.'/'.$confirmation_code) }}">{{ url('/auth/register/verify/'.$id.'/'.$confirmation_code) }}</a>
        </p>
        <p style="font-size:85%; color:#444;">
            For any queries, reach out to us at: <a href="mailto:support@cat.com">support@cat.com</a>
        </p>
        <p style="font-size:85%; text-align:center; color:#444;">
            &copy; {{ date('Y') }}. CAT
        </p>
    </div>
</div>
</body>
</html>