{{-- Bank Paymet section --}}

<div class="card" id="bank-transfer-sidenav">
    {{ Form::open(['route' => ['bank.transfer.setting'], 'id' => 'payment-form']) }}
    <div class="card-header p-3">
        <div class="row">
            <div class="col-sm-10 col-9">
                <h5 class="">{{ __('Bank Transfer') }}</h5>
                {{-- <small>{{ __('These details will be used to collect subscription, invoice, reproduct-card add_on_cardtainer, etc. payments.') }}</small> --}}
            </div>
            <div class="col-sm-2 col-3 text-end">
                <div class="form-check form-switch custom-switch-v1 float-end">
                    <input type="checkbox" name="bank_transfer_payment_is_on" class="form-check-input input-primary" id="bank_transfer_payment_is_on" {{ (isset($settings['bank_transfer_payment_is_on']) && $settings['bank_transfer_payment_is_on'] =='on') ?' checked ':'' }} >
                    <label class="form-check-label pt-0" for="bank_transfer_payment_is_on"></label>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body p-3">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group mb-0">
                    <label class="col-form-label">{{ __('Bank Details') }}</label>
                    <textarea type="text" name="bank_number" id="bank_number" class="form-control bank_transfer_text" {{ (isset($settings['bank_transfer_payment_is_on']) && $settings['bank_transfer_payment_is_on']  == 'on') ? '' : ' disabled' }} rows="3" placeholder="{{ __('Bank Transfer Number') }}">{{ !empty(company_setting('bank_number'))?company_setting('bank_number'):'' }}</textarea>
                    <small>{{ __('Example : Bank : bank name </br> Account Number : 0000 0000 </br>') }}</small>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer p-3 text-end">
        <input class="btn btn-print-invoice btn-primary" type="submit" value="{{ __('Save Changes') }}">
    </div>
    {{ Form::close() }}

</div>


