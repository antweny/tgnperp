<figure class="highcharts-figure">
    <div id="dc"></div>
</figure>

@push('scripts')
    <script>

        var datas = {!! json_encode($dc[0]) !!}

        Highcharts.chart('dc', {
            chart: {
                type: 'pie',
                backgroundColor:null,
                margin:[60,0,0,0]
            },
            title: {
                text: 'District Commissioners (DC)',
                style: {
                    color:'#fff',
                    fontWeight: 'bold'
                }
            },
            subtitle: {
                text: 'Total Number {{$dc[1]}}',
                style: {
                    color:'orange',
                }
            },
            plotOptions: {
                pie: {
                    colors: ['#00A4CCFF','#F95700FF'],
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
