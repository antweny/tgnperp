<figure class="highcharts-figure">
    <div id="executive"></div>
</figure>

@push('scripts')
    <script>

        var datas = {!! json_encode($executive[0]) !!}

        Highcharts.chart('executive', {
            chart: {
                type: 'pie',
                backgroundColor:null,
                margin:[60,0,0,0]
            },
            title: {
                text: 'Executive',
                style: {
                    color:'#FFF',
                    fontWeight: 'bold'
                }
            },
            subtitle: {
                text: 'Total Number {{$executive[1]}}',
                style: {
                    color:'orange',
                }
            },
            plotOptions: {
                pie: {
                    colors: ['#964F4CFF','#696667FF'],
                    dataLabels: {
                        enabled:true,
                        format:'<b>{point.name}</b><br>{point.percentage:.2f} %',
                        distance: -50,
                    },
                },
            },
            series: [{
                name: 'Number',
                colorByPoint: true,
                data: datas
            }],
        });
    </script>
@endpush
