<h2>{{ $job->title }}</h2>

<p>Congratulations! Your job is posted successfully.</p>

<a href="{{ url('/jobs/'.$job->id) }}">View the job</a>