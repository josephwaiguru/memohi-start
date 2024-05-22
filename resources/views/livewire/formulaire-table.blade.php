<div class="table-responsive">
    <table class="table table-striped livewire-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>car_brand</th>
                <th>car_model</th>
                <th>car_generation</th>
                <th>car_energy</th>
                <th>car_range</th>
                <th>created_date</th>
            </tr>
        </thead>
        <tbody>
            @if ($users)
            @foreach($users as $user)
            <tr>
                <td>{{ $user->fullname}}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phonenumber }}</td>
                <td>{{ $user->car_brand }}</td>
                <td>{{ $user->car_model }}</td>
                <td>{{ $user->car_generation }}</td>
                <td>{{ $user->car_energy }}</td>
                <td>{{ $user->car_range }}</td>
                <td>{{ $user->created_at}}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="100">
                    <div class="text-center">
                         No records found.
                    </div>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
