<figure class="highcharts-figure">
    <div id="das"></div>
</figure>

@push('scripts')
    <script>

        var datas = {!! json_encode($das[0]) !!}

        Highcharts.chart('das', {
            chart: {
                type: 'pie',
                backgroundColor:null,
                margin:[60,0,0,0]
            },
            title: {
                text: 'District Administrative Secretaries (DAS)',
                style: {
                    color:'#fff',
                    fontWeight: 'bold'
                }
            },
            subtitle: {
                text: 'Total Number {{$das[1]}}',
                style: {
                    color:'orange',
                }
            },
            plotOptions: {
                pie: {
                    colors: ['#00203FFF','#ADEFD1FF'],
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
