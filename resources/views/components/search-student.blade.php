<form action="{{ route('student.show') }}" method="get">
    <label for="student_id">Enter Student ID:</label>
    <input type="text" name="id" id="student_id" placeholder="e.g., S001">
    <button type="submit">Search</button>
</form>
