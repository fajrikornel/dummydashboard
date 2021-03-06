@extends('welcome')

@section('content')
<div class="container bg-white rounded-lg w-5/6 mt-10 p-10">    
    <h1 class="text-3xl">Dummy Live Dashboard</h1>
    <div class="flex justify-between">
        <div class="w-1/2">
            <canvas id="dataX"></canvas>
        </div>
        <div class="w-1/2">
            <canvas id="dataY"></canvas>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('chart.js/chart.js')}}"></script>
<script>
    let ctxX = document.getElementById('dataX');
    let ctxY = document.getElementById('dataY');
    let chartX = new Chart(ctxX, {
        type: 'line',
        data: {
            labels: [],
            datasets: [{
                label: 'X',
                data: [],
            }],
        },
        options: {
            plugins: {
                title: 'X Data',
            },
            scales: {
                y: {
                    min: 25,
                    max: 125,
                }
            },
        },
    });

    let chartY = new Chart(ctxY, {
        type: 'line',
        data: {
            labels: [],
            datasets: [{
                label: 'Y',
                data: [],
            }],
        },
        options: {
            plugins: {
                title: 'Y Data',
            },
            scales: {
                y: {
                    min: 25,
                    max: 125,
                }
            },
        },
    });
    
    let updateData = async () => {
        let response = await fetch('{{route('api.data')}}');
        let data = await response.json();
        chartX.data.labels = data.data.map((obj) => {
            return (new Date(obj['created_at'])).toLocaleTimeString()
        }).reverse();
        chartY.data.labels = data.data.map((obj) => {
            return (new Date(obj['created_at'])).toLocaleTimeString()
        }).reverse();
        chartX.data.datasets[0].data = data.data.map((obj) => {return obj['X']}).reverse();
        chartY.data.datasets[0].data = data.data.map((obj) => {return obj['Y']}).reverse();
        chartX.update()
        chartY.update()
    };
    updateData();
    setInterval(updateData,2000);
</script>

@endsection