@vite(['resources/js/payment-boxes.js', 'resources/css/payment-boxes.css'])

<div id="pricingModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Choose the right plan for you</h2>
        <p>Upgrade your plan to get more features.</p>

        <!-- Бутони за Monthly/Annual -->
        <div class="toggle-buttons">
            <button id="monthlyBtn" class="active">Monthly</button>
            <button id="annualBtn">Annual (Save 25%)</button>
        </div>

        <!-- Планове -->
        <div class="plans">
            @foreach($paymentsBoxes['boxes'] as $paymentBox)
                <div class="plan highlighted">
                    <input type="hidden" class="js-plan-id" value="{{ $paymentBox['plan_id'] }}">
                    <h3>{{ $paymentBox['name'] }}</h3>
                    @foreach($paymentBox['features'] as $feature)
                        <p>{{ $feature }}</p>
                    @endforeach

                    <h4 class="price">{{ $paymentBox['price'] }} / {{ $paymentBox['frequency'] }}</h4>
{{--                    <p class="annual-price hidden">$27 /mo (billed $324 /yr)</p>--}}
                </div>
            @endforeach
        </div>

{{--        <button id="checkout-button" class="upgrade-btn">Upgrade Plan</button>--}}
        <button id="subscribe-button" class="upgrade-btn">Upgrade Plan</button>
    </div>
</div>

{{--<script src="https://js.stripe.com/v3/"></script>--}}
{{--<script>--}}
{{--    const stripe = Stripe('{{ config('services.stripe.key') }}');--}}

{{--    document.getElementById('checkout-button').addEventListener('click', function () {--}}
{{--        fetch('{{ route('checkout.session') }}', {--}}
{{--            method: 'POST',--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': '{{ csrf_token() }}',--}}
{{--                'Content-Type': 'application/json'--}}
{{--            },--}}
{{--        })--}}
{{--            .then(response => response.json())--}}
{{--            .then(session => {--}}
{{--                return stripe.redirectToCheckout({ sessionId: session.id });--}}
{{--            })--}}
{{--            .then(result => {--}}
{{--                if (result.error) {--}}
{{--                    alert(result.error.message);--}}
{{--                }--}}
{{--            })--}}
{{--            .catch(error => {--}}
{{--                console.error('Error:', error);--}}
{{--            });--}}
{{--    });--}}
{{--</script>--}}

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');

    document.getElementById('subscribe-button').addEventListener('click', function () {
        fetch('{{ route('subscription.session') }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                plan_id: document.querySelector('.plan.selected .js-plan-id')?.value,
                permission: document.querySelectorAll('.plan.selected H3')[0].innerHTML,
            })
        })
        .then(response => response.json())
        .then(session => {
            return stripe.redirectToCheckout({ sessionId: session.id });
        })
        .then(result => {
            if (result.error) {
                alert(result.error.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>
