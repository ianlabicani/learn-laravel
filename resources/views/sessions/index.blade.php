<div class="active-session">
    <table>
        <tr>
            <th>Student Id</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Session</th>
            <th>Time Out</th>
        </tr>

        {{-- $active_sessions = getAllActiveSessions(); --}}
        // print_r($active_sessions);
        @foreach ($activeSessions as $activeSession)
            <tr>
                <td>{{ $active_session['session_id'] }}</td>
                <td>{{ $active_session['student_id'] }}</td>
                <td>{{ $active_session['first_name'] }}</td>
                <td>{{ "<strong class='session-sec'>" . $active_session['session_seconds'] . '</strong> seconds' }}
                </td>
                <td>
                    {{-- make this a component --}}
                    {{-- <form action="session.php" method="post">
                        <input type="hidden" name="student_id" value="{{ $student['student_id'] }}">
                        <button type="submit" name="time_out">Time Out</button>
                    </form> --}}
                </td>
        @endforeach
    </table>
</div>
