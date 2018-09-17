@component('mail::message')
# Standard Bank Procurement

Foi adicionado como fornecedor

@component('mail::button', ['url' => 'procurement.standardbank.co.mz'])
Clique aqui para inserir documentos
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
