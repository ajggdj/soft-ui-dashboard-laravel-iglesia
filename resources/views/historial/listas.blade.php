@extends('layouts.user_type.auth')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Historial</h5>
                                </div>
                                <a href="{{ route('historial-crear') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Nuevo
                                    caso</a>
                            </div>
                            <br>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                @foreach ($historial as $lista )
                                <table class="table align-items-center mb-0">
                                    <thead style="background:#000;text-align:center;">
                                        <tr>
                                            <td colspan="4">
                                                <a class="btn_show-{{ $lista->id }}" href="#!"
                                                    style="color:#fff; font-size:12px"><strong>C.- Antecedentes</strong></a>
                                            </td>
                                        </tr>
                                    </thead>

                                    <tbody id="contenido-{{ $lista->id }}" style="display: none;">
                                        <tr>
                                            <td colspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Padecimiento Psicologico
                                            </td>
                                            <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12">{{$lista->padecimiento_psico}}</textarea>
                                            </td>
                                            
                                        </tr>
                                        <td colspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Historial de Medicamentos</td>
                                            <td>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12">{{$lista->medicamentos}}</textarea>
                                            </td>
                                        <tr>
                                        </tr>
                                        <tr>
                                            <td colspan="2"
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Historial de Enfermedades </td>
                                            <td colspan="2"
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12">{{$lista->enfermedad}}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Historial de Embarazos
                                            </td>
                                            <td colspan="2"
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12">{{$lista->embarazada}}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Observaciones Discernimiento
                                            </td>
                                            <td colspan="2"
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12">{{$lista->observaciones_discernimiento}}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Observaciones Sacerdote
                                            </td>
                                            <td colspan="2"
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12">{{$lista->observaciones_sacerdote}}</textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <script>
        $(function() {
            $('.btn_show-{{ $lista->id }}').click(function(ev) {
                ev.preventDefault();
                $('#contenido-{{ $lista->id }}').slideToggle("slow");
            });
        })
    </script>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('dashboard')
    <script>
        window.onload = function() {
            var ctx = document.getElementById("chart-bars").getContext("2d");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Sales",
                        tension: 0.4,
                        borderWidth: 0,
                        borderRadius: 4,
                        borderSkipped: false,
                        backgroundColor: "#fff",
                        data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
                        maxBarThickness: 6
                    }, ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 15,
                                font: {
                                    size: 14,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                                color: "#fff"
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false
                            },
                            ticks: {
                                display: false
                            },
                        },
                    },
                },
            });


            var ctx2 = document.getElementById("chart-line").getContext("2d");

            var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

            gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
            gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
            gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

            var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

            gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
            gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
            gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

            new Chart(ctx2, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                            label: "Mobile apps",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 0,
                            borderColor: "#cb0c9f",
                            borderWidth: 3,
                            backgroundColor: gradientStroke1,
                            fill: true,
                            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                            maxBarThickness: 6

                        },
                        {
                            label: "Websites",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 0,
                            borderColor: "#3A416F",
                            borderWidth: 3,
                            backgroundColor: gradientStroke2,
                            fill: true,
                            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                            maxBarThickness: 6
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: '#b2b9bf',
                                font: {
                                    size: 11,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#b2b9bf',
                                padding: 20,
                                font: {
                                    size: 11,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });
        }
    </script>
@endpush
