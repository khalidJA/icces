@component('mail::message')
# Welcome {{ $name }}
# Thanks for joining us

 you have just registered on the official website of #Second International Conference on Computing and Emerging Sciences.<br>
We have sent this email to confirm the registration process and to continue to communicate with you always and to send you <br>
the latest news related to the conference or your paper if you have registered among our elite researchers.<br>
to complete the registration process visit the following link
@component('mail::button', ['url' => "http://localhost:8000/active/".$active_code."/".$email])
Click Here
@endcomponent 

<h3>ICCES Technical Committee</h3>
@endcomponent
