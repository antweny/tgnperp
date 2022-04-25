<figure class="highcharts-figure">
    <div id="deputyPermanentSecretary"></div>
</figure>

@push('scripts')
    <script>

        var datas = {!! json_encode($depps[0]) !!}

        Highcharts.chart('deputyPermanentSecretary', {
            chart: {
                type: 'pie',
                backgroundColor:null,
                margin:[60,0,0,0]
            },
            title: {
                text: 'Deputy Permanent Secretaries',
                style: {
                    color:'#fff',
                    fontWeight: 'bold'
                }
            },
            subtitle: {
                text: 'Total Number {{$depps[1]}}',
                style: {
                    color:'orange',
                }
            },
            plotOptions: {
                pie: {
                    colors: ['#ED2B33FF','#D85A7FFF'],
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
