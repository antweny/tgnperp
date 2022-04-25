<figure class="highcharts-figure">
    <div id="ras"></div>
</figure>

@push('scripts')
    <script>

        var datas = {!! json_encode($ras[0]) !!}

        Highcharts.chart('ras', {
            chart: {
                type: 'pie',
                backgroundColor:null,
                margin:[60,0,0,0]
            },
            title: {
                text: 'Regional Administrative Secretaries (RAS)',
                style: {
                    color:'#fff',
                    fontWeight: 'bold'
                }
            },
            subtitle: {
                text: 'Total Number {{$ras[1]}}',
                style: {
                    color:'orange',
                }
            },
            plotOptions: {
                pie: {
                    colors: ['#FC766AFF','#5B84B1FF'],
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
