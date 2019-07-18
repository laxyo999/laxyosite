<div class="well col-sm-8">
<p>Job Profile: {{ $data['job_id'] }}</p>
<p>Hello, New Applicant: {{ $data['name'] }}</p>
<p>Email Is: {{ $data['email'] }}</p>

<p>Mobile Number Is: {{ $data['mobileno'] }}</p>
<p>Resume Link: <a href="{{ $data['doc_url'] }}">download file</a></p>

</div>