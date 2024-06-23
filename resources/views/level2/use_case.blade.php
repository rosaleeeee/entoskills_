<x-app-layout>
    <link href="{{ asset('use_case.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('home_mbti.css') }}">

    @include('layouts.sidebar')
    <div class="container"> <!-- Ajout de classe pour centrer le contenu -->
        <h1 class="page-title">Business Model Canvas</h1> <!-- Ajout de classe pour le titre -->
        <form id="business-model-form" action="{{ route('business_model.store') }}" method="POST">
            @csrf
            <div class="business-model-canvas">
                <div class="canvas-section key-partnerships">
                    <label for="key_partnerships">Key Partnerships</label>
                    <textarea name="key_partnerships" id="key_partnerships" class="form-controll"></textarea>
                </div>
                <div class="canvas-section key-activities">
                    <label for="key_activities">Key Activities</label>
                    <textarea name="key_activities" id="key_activities" class="form-controll"></textarea>
                </div>
                <div class="canvas-section value-propositions">
                    <label for="value_propositions">Value Propositions</label>
                    <textarea name="value_propositions" id="value_propositions" class="form-controll"></textarea>
                </div>
                <div class="canvas-section customer-relationships">
                    <label for="customer_relationships">Customer Relationships</label>
                    <textarea name="customer_relationships" id="customer_relationships" class="form-controll"></textarea>
                </div>
                <div class="canvas-section customer-segments">
                    <label for="customer_segments">Customer Segments</label>
                    <textarea name="customer_segments" id="customer_segments" class="form-controll"></textarea>
                </div>
                <div class="canvas-section key-resources">
                    <label for="key_resources">Key Resources</label>
                    <textarea name="key_resources" id="key_resources" class="form-controll"></textarea>
                </div>
                <div class="canvas-section channels">
                    <label for="channels">Channels</label>
                    <textarea name="channels" id="channels" class="form-controll"></textarea>
                </div>
                <div class="canvas-section cost-structure">
                    <label for="cost_structure">Cost Structure</label>
                    <textarea name="cost_structure" id="cost_structure" class="form-controll"></textarea>
                </div>
                <div class="canvas-section revenue-streams">
                    <label for="revenue_streams">Revenue Streams</label>
                    <textarea name="revenue_streams" id="revenue_streams" class="form-controll"></textarea>
                </div>
            </div>
            <div class="buttons-container">
                <button type="submit" class="custom-button" id="submit-btn">Done</button>
            </div>
        </form>
    </div>
        <div class="container_c">
            <div id="main" data-user="{{ json_encode($user) }}"></div>
        </div>   
    <script>
        document.getElementById('submit-btn').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('business-model-form').submit();
        });
    </script>
</x-app-layout>