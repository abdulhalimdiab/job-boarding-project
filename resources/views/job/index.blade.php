<x-layout title="Jobs">

<h1>Job 1</h1>
<h1>Job 2</h1>
<h1>Job 3</h1>

<h3>
    @foreach($jobs as $job)
        <div>{{$job['title']}}</div>
        <div>{{$job['salary']}}</div>

    @endforeach
</h3>
</x-layout>
