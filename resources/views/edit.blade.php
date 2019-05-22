@extends('layouts.main')

@section('title','Edit')
    
@section('content')

    <div class="container">
        <table class="table table-hover">
            <h1>Results</h1>
            <thead>
                <tr>
                <th scope="col">Place</th>
                <th scope="col">Time</th>
                <th scope="col">Name</th>
                <th scope="col">Car</th>
                <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-active">
                <th scope="row">1</th>
                <td>1:23:45</td>
                <td>John Doe</td>
                <td>VW GOLF GTI</td>
                <td>01.02.2017</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>1:23:45</td>
                <td>John Doe</td>
                <td>VW GOLF GTI</td>
                <td>01.02.2017</td>
                </tr>
                <tr class="table-active">
                <th scope="row">3</th>
                <td>1:23:45</td>
                <td>John Doe</td>
                <td>VW GOLF GTI</td>
                <td>01.02.2017</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>1:23:45</td>
                <td>John Doe</td>
                <td>VW GOLF GTI</td>
                <td>01.02.2017</td>
                </tr>
                <tr class="table-active">
                <th scope="row">5</th>
                <td>1:23:45</td>
                <td>John Doe</td>
                <td>VW GOLF GTI</td>
                <td>01.02.2017</td>
                </tr>
                <tr>
                <th scope="row">6</th>
                <td>1:23:45</td>
                <td>John Doe</td>
                <td>VW GOLF GTI</td>
                <td>01.02.2017</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection