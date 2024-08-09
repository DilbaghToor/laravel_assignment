<x-header />
<div class="container mt-5">
    <h1>Employee Details</h1>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Employee Information</h5>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item"><strong>Name:</strong> {{ $employee->name }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $employee->email }}</li>
                <li class="list-group-item"><strong>Position:</strong> {{ $employee->position }}</li>
                <li class="list-group-item"><strong>Salary:</strong> ${{ number_format($employee->salary, 2) }}</li>
            </ul>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to List</a>
            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</div>

<x-footer />