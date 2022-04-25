<figure class="highcharts-figure">
    <div id="regionalCommissioner"></div>
</figure>

@push('scripts')
    <script>

        var datas = {!! json_encode($rc[0]) !!}

        Highcharts.chart('regionalCommissioner', {
            chart: {
                type: 'pie',
                backgroundColor:null,
                margin:[60,0,0,0]
            },
            title: {
                text: 'Regional Commissioners (RC)',
                style: {
                    color:'#fff',
                    fontWeight: 'bold'
                }
            },
            subtitle: {
                text: 'Total Number {{$rc[1]}}',
                style: {
                    color:'orange',
                }
            },
            plotOptions: {
                pie: {
                    colors: ['#949398FF','#F4DF4EFF'],
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
