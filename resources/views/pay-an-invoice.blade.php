@extends('layouts.main')
@section('left-bar')
    @include('includes.left-bars.pay-an-invoice')
@endsection
@section('content')
    <style>
        .pdf-like-content h2 {
            font-family: 'Helvetica', sans-serif;
            font-size: 1.5rem;
            color: #333;
            font-weight: bold;
            margin-top: 1.5rem;
        }

        .pdf-like-content h3 {
            font-family: 'Helvetica', sans-serif;
            font-size: 1.25rem;
            color: #444;
            font-weight: bold;
        }

        .pdf-like-content p,
        .pdf-like-content li {
            font-family: 'Times New Roman', serif;
            font-size: 1rem;
            color: #555;
        }

        .pdf-like-content ul {
            padding-left: 20px;
        }

        .bank-details {
            background-color: #f8f9fa;
            border-left: 5px solid #007bff;
            padding: 15px;
            margin: 15px 0;
        }

        .bank-details strong {
            width: 200px;
            display: inline-block;
        }
    </style>
    <div class="bg-white mt-3 pdf-like-content">
        <div class="m-2 p-2">
            <h2 class="border-bottom pb-2 mb-4">Payment Instructions</h2>

            <h3 id="payment-by-credit-card">Payment by Credit Card</h3>
            <p>Payment by Credit Card is the preferred payment method. Please click Credit Card and follow the instructions
                to pay by credit card. We accept payments in Euros (EUR), US Dollars (US$), Pounds Sterling (GBP) via VISA,
                MasterCard, American Express and China UnionPay.</p>

            <h3 id="payment-by-wire-transfer">Payment by Wire Transfer</h3>
            <p>If you are unable to pay by credit card, we also accept wire (bank) transfer. Please ensure that transfer
                fees are paid by you as the “sender”; do not select “shared” fees or fees paid by the “beneficiary” or
                “recipient” in order that TerraVeritas receives the full invoiced amount. We prefer to receive payment in
                US$, but also accept payments in EUR, USD and GBP.</p>

            <p><strong>Select your preferred currency:</strong></p>
            <ul>
                <li>US$</li>
                <li>EUR</li>
                <li>GBP</li>
            </ul>

            <h3 id="bank-details">Bank Details</h3>
            <div class="bank-details">
                <p><strong>IBAN:</strong> CH74 0023 3233 2227 2101 Y</p>
                <p><strong>SWIFT Code / BIC:</strong> UBSWCHZH80A</p>
                <p><strong>Beneficiary's Name:</strong> TerraVeritas Publishing</p>
                <p><strong>Beneficiary's Address:</strong> Riaz ul Jannah, Faisalabad, Pakistan</p>
                <p><strong>Bank Account Number:</strong> 0233 00222721.01Y</p>
                <p><strong>Bank Name:</strong> Muslim Commercial Bank</p>
                <p><strong>Bank Address:</strong> Muslim Commercial Bank, University of Agriculture Branch, Faisalabad,
                    Pakistan</p>
            </div>

            <h3 id="alternative-methods">Alternative Methods</h3>
            <ul>
                <li><strong>Online Payment using PayPal:</strong> Please click PayPal and follow the instructions. Payment
                    via PayPal using the following link: <a href="mailto:akash078645@gmail.com">akash078645@gmail.com</a>
                </li>
                <li>The payee e-mail address is <a
                        href="mailto:director@terraveritaspublishing.com">director@terraveritaspublishing.com</a>. We accept
                    USD, EUR and GBP paid by Credit Card through PayPal.</li>
                <li><strong>Note:</strong> 5% of the invoiced amount should be added. For example, you need to send 315 US$
                    (300 US$ + 5%) so that TerraVeritas can receive 300 US$.</li>
            </ul>

            <h3 id="contact-information">Contact Information</h3>
            <div class="mt-3">
                <p><strong>TerraVeritas Publishing</strong></p>
                <p>H # 355 St # 10, Umar Block, Riaz ul Jannah, Faisalabad - 38000, Pakistan</p>
                <p><strong>E-mail:</strong> <a
                        href="mailto:director@terraveritaspublishing.com">director@terraveritaspublishing.com</a></p>
                <p><strong>Tel:</strong> +92 3326009196</p>
            </div>
        </div>
    </div>
@endsection