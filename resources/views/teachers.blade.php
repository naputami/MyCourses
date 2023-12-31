@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Teacher Data</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Bank Account</th>
                <th scope="col">Subjects</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->payment->account }}</td>
                    <td>
                        <ul>
                            @foreach ($item->subjects as $subject)
                                <li>{{ $subject->name}}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="4">No data available</td>
                    </tr>
            @endforelse

        </tbody>
    </table>
</div>

@endsection