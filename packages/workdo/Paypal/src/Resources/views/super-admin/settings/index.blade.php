<div class="card" id="paypal-sidenav">
    {{ Form::open(['route' => ['paypal.setting.store'], 'enctype' => 'multipart/form-data', 'id' => 'payment-form']) }}
    @csrf
    <div class="card-header p-3">
        <div class="row row-gaps align-items-center">
            <div class="col-sm-10 col-9">
                <h5 class="">{{ __('Paypal') }}</h5>
                <small>{{ __('These details will be used to collect subscription plan payments.Each subscription plan will have a payment button based on the below configuration.') }}</small>
            </div>
            <div class="col-sm-2 col-3 text-end">
                <div class="form-check form-switch custom-switch-v1 float-end">
                    <input type="checkbox" name="paypal_payment_is_on" class="form-check-input input-primary"
                        id="paypal_payment_is_on"
                        {{ isset($settings['paypal_payment_is_on']) && $settings['paypal_payment_is_on'] == 'on' ? ' checked ' : '' }}>
                    <label class="form-check-label" for="paypal_payment_is_on"></label>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body p-3 pb-0">
        <div class="row">
            <div class="col-md-12">
                <label class="paypal-label col-form-label pt-0" for="company_paypal_mode">{{ __('Paypal Mode') }}</label>
                <br>
                <div class="form-group col-md-6">
                    <div class="d-flex flex-wrap row-gaps">

                        <div class="form-check col-md-3">
                            <label class="form-check-labe text-dark">
                                <input type="radio" name="company_paypal_mode" value="sandbox"
                                    class="form-check-input"
                                    {{ !isset($settings['company_paypal_mode']) || $settings['company_paypal_mode'] == 'sandbox' ? 'checked="checked"' : '' }}>
                                {{ __('Sandbox') }}
                            </label>
                        </div>


                        <div class="form-check col-md-3">
                            <label class="form-check-labe text-dark">
                                <input type="radio" name="company_paypal_mode" value="live" class="form-check-input"
                                    {{ isset($settings['company_paypal_mode']) && $settings['company_paypal_mode'] == 'live' ? 'checked="checked"' : '' }}>
                                {{ __('Live') }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="company_paypal_client_id" class="col-form-label pt-0">{{ __('Client ID') }}</label>
                    <input type="text" name="company_paypal_client_id" id="company_paypal_client_id"
                        class="form-control"
                        value="{{ !isset($settings['company_paypal_client_id']) || is_null($settings['company_paypal_client_id']) ? '' : $settings['company_paypal_client_id'] }}"
                        placeholder="{{ __('Client ID') }}"{{ isset($settings['paypal_payment_is_on']) && $settings['paypal_payment_is_on'] == 'on' ? '' : ' disabled' }}>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="company_paypal_secret_key" class="col-form-label pt-0">{{ __('Secret Key') }}</label>
                    <input type="text" name="company_paypal_secret_key" id="company_paypal_secret_key"
                        class="form-control"
                        value="{{ !isset($settings['company_paypal_secret_key']) || is_null($settings['company_paypal_secret_key']) ? '' : $settings['company_paypal_secret_key'] }}"
                        placeholder="{{ __('Secret Key') }}"
                        {{ isset($settings['paypal_payment_is_on']) && $settings['paypal_payment_is_on'] == 'on' ? '' : ' disabled' }}>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer p-3 text-end">
        <input class="btn btn-print-invoice btn-primary" type="submit" value="{{ __('Save Changes') }}">
    </div>
    {{ Form::close() }}

</div>

<script>
    "use strict";
    $(document).on('click', '#paypal_payment_is_on', function() {
        if ($('#paypal_payment_is_on').prop('checked')) {
            $("#company_paypal_client_id").removeAttr("disabled");
            $("#company_paypal_secret_key").removeAttr("disabled");
        } else {
            $('#company_paypal_client_id').attr("disabled", "disabled");
            $('#company_paypal_secret_key').attr("disabled", "disabled");
        }
    });
</script>
