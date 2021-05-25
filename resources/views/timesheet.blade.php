<div style="width:75%; text-align:center">
    <form action="/">
        <label>Name
            <input type="text">
        </label>
        <label>Date
            <input type="date">
        </label>
        <button type="submit">Filter</button>
    </form>
    @foreach($workers as $worker)
        Name: {{ $worker->name }} <br>
        @foreach($worker->timesheets as $timesheet)
            Start working:
            {{ $timesheet->start_work }}
            <br>
            End working:
            {{ $timesheet->end_work }}
            <br>
        @endforeach
        <hr>
    @endforeach
</div>
