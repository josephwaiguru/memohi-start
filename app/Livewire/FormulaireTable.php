<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserInformation;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class FormulaireTable extends Component
{
    // public function render()
    // {
    //     return view('livewire.formulaire-table');
    // }
    public function render()
    {
        // Fetch users from the database
        $users = UserInformation::all();

        // Pass the users data to the view
        return view('livewire.formulaire-table', [
            'users' => $users
        ]);
    }
    protected $model = UserInformation::class;
    protected string $tableName = 'user_information';
    public array $dateRange = [];
//     public function configure(): void
//     {
//         $this->setPrimaryKey('id');
//         $this->setDefaultSort('created_at', 'desc');
//         $this->setQueryStringStatus(false);

//         $this->setThAttributes(function (Column $column) {
//             if ($column->isField('fullname')) {
//                 return [
//                     'class' => 'text-center w-12',
//                 ];
//             }
//             if ($column->isField('email')) {
//                 return [
//                     'class' => 'w-35',
//                 ];
//             }
//             if ($column->isField('phonenumber')) {
//                 return [
//                     'class' => 'd-flex justify-content-end w-15',
//                 ];
//             }
//             if ($column->isField('car_brand')) {
//                 return [
//                     'class' => 'text-center',
//                 ];
//             }

//             return [];
//         });

//         $this->setTdAttributes(function (Column $column) {
//             if ($column->getField() === 'fullname') {
//                 return [
//                     'class' => 'text-center',
//                 ];
//             }

//             if ($column->getField() === 'email') {
//                 return [
//                     'class' => 'text-end',
//                 ];
//             }
//             if ($column->getField() === 'phonenumber') {
//                 return [
//                     'class' => 'text-center',
//                 ];
//             }

//             return [];
//         });
//     }
//     public function columns(): array
//     {
//         return [
//             Column::make(__('fullname'), 'fullname')
//                 ->searchable()
//                 ->view('manage_formulaire.components.transactions-id'),
//             Column::make(__('email'), 'email')
//                 ->searchable()
//                 ->format(function ($value, $row, Column $column) {
//                     return view('manage_formulaire.components.invoice-id-payment-date')
//                         ->withValue([
//                             // 'invoice-id-route' => route('invoices.show', $row->invoice->id),
//                             // 'invoice-id' => $row->invoice->invoice_id,
//                         ]);
//                 }),
//             Column::make(__('phonenumber'), 'phonenumber')
// //                ->sortable()
//                 ->searchable()
//                 ->view('manage_formulaire.components.client-name'),
//             Column::make('car_brand', 'car_brand')
//                 ->sortable()
//                 ->searchable()
//                 ->hideif('admin'),
//             Column::make(__('car_model'), 'car_model')
//                 ->sortable()
//                 ->searchable()
//                 ->format(function ($value, $row, Column $column) {
//                     return view('manage_formulaire.components.invoice-id-payment-date')
//                         ->withValue([
//                             'car_model' => $row->payment_date,
//                         ]);
//                 }),
//             Column::make(__('car_generation'), 'car_generation')
//                 ->sortable()
//                 ->searchable()
//                 ->view('formlaire.components.amount'),
//             Column::make(__('car_energy'), 'car_energy')
//                 ->searchable()
//                 ->view('manage_formulaire.components.transaction-approved'),
//             Column::make(__('car_range'), 'car_range')
//                 ->searchable()
//                 ->view('manage_formulaire.components.payment-mode'),
//             // Column::make(__('created_date'), 'created_date')
//             //     ->searchable()
//             //     ->view('formulaire.components.transaction-status'),
//             // Column::make(__('messages.common.attachment'), 'id')
//             //     ->searchable()
//             //     ->view('transactions.components.transaction-attachment'),
//         ];
//     }
    // public function builder(): Builder
    // {
    //     $query = UserInformation::with('fullname');

    //     // $query->when(isset($this->paymentModeFilter), function (Builder $q) {
    //     //     if ($this->paymentModeFilter != Payment::ALL) {
    //     //         $q->where('payment_mode', $this->paymentModeFilter);
    //     //     }
    //     // });

    //     // $query->when(isset($this->paymentStatusFilter), function (Builder $q) {
    //     //     if ($this->paymentStatusFilter != Payment::STATUS_ALL) {
    //     //         $q->where('is_approved', $this->paymentStatusFilter);
    //     //     }
    //     // });

    //     $query->when(count($this->dateRange) > 0, function (Builder $q) {
    //         $startDate = $this->dateRange[0];
    //         $endDate = $this->dateRange[1];
    //         $q->whereBetween('created_date', [$startDate, $endDate]);
    //     });

    //     // return $query->select('payments.*');
    // }
}
