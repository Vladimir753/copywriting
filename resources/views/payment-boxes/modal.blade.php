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
            <div class="plan">
                <h3>Free</h3>
                <p>1 Seat</p>
                <p>2000 Words In Chat</p>
                <p>200 Workflow Credits</p>
                <h4>Free Forever</h4>
            </div>
            <div class="plan highlighted">
                <h3>Starter</h3>
                <p>1 Seat</p>
                <p>Unlimited Words In Chat</p>
                <h4 class="price">$36 /mo</h4>
                <p class="annual-price hidden">$27 /mo (billed $324 /yr)</p>
            </div>
            <div class="plan">
                <h3>Pro</h3>
                <p>5 Seats</p>
                <p>Unlimited Words + AI Features</p>
                <h4 class="price">$99 /mo</h4>
                <p class="annual-price hidden">$75 /mo (billed $900 /yr)</p>
            </div>
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
