<main>
    <div class="container my-4">
        <!--partenze-->
        <h2 class="mt-3">prossime partenze:</h2>
        <!--/partenze-->

        <!--contenitore cards-->
        <div class="box d-flex flex-wrap">
            
            <!--ciclo-->
            @foreach ($trains as $train)
                @if ($train['In_orario'] != 0)
            <!--cards-->
            <div class="card">

                <!--treno-->
                <div>
                <span class="pe-2"><strong>Treno:</strong></span>{{$train['Azienda']}}{{$train['Codice_treno']}}
                </div>
                <!--/treno-->

                <!--partenza-->
                <div class="d-flex justify-content-between">
                    <div>
                        <strong class="pe-2">Partenza:</strong>{{$train['Stazione_partenza']}}
                    </div>
                    <div>
                        <strong class="px-2">Alle ore:</strong>{{$train['Orario_partenza']}}
                    </div>
                    
                </div>
                <!--/partenza-->

                <!--arrivo-->
                <div class="d-flex justify-content-between">
                    <div>
                        <strong class="pe-2">Arrivo:</strong>{{$train['Stazione_arrivo']}}
                    </div>
                    <div>
                        <strong class="px-2">Alle ore:</strong>{{$train['Orario_arrivo']}}
                    </div>
                </div>
                <!--/arrivo-->

                <div>
                    <strong>In Orario</strong>
                </div>
            </div>
                <!--/cards-->
            @endif  
            @endforeach
            <!--/fine ciclo-->
        </div>
        <!--/contenitore cards-->

        <!--cancellati-->
        <h2 class="mt-3">Corse cancellate:</h2>
        <!--/cancellati-->
            
        <!--contenitore cards-->
        <div class="box d-flex flex-wrap">
            
            <!--ciclo-->
            @foreach ($trains as $train)
                @if ($train['In_orario'] != 1)
            <!--cards-->
            <div class="card">

                <!--treno-->
                <div>
                <span class="pe-2"><strong>Treno:</strong></span>{{$train['Azienda']}}{{$train['Codice_treno']}}
                </div>
                <!--/treno-->

                <!--partenza-->
                <div class="d-flex justify-content-between">
                    <div>
                        <strong class="pe-2">Partenza:</strong>{{$train['Stazione_partenza']}}
                    </div>
                    <div>
                        <strong class="px-2">Alle ore:</strong>{{$train['Orario_partenza']}}
                    </div>
                    
                </div>
                <!--/partenza-->

                <!--arrivo-->
                <div class="d-flex justify-content-between">
                    <div>
                        <strong class="pe-2">Arrivo:</strong>{{$train['Stazione_arrivo']}}
                    </div>
                    <div>
                        <strong class="px-2">Alle ore:</strong>{{$train['Orario_arrivo']}}
                    </div>
                </div>
                <!--/arrivo-->

                <div>
                    <strong>Cancellato</strong>
                </div>
            </div>
            <!--/cards-->
            @endif  
            @endforeach
            <!--/fine ciclo-->
        </div>
        <!--/contenitore cards-->
    </div>
</main>