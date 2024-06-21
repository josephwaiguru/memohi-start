<div class="table-responsive">
    <table class="table table-striped livewire-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>car brand</th>
                <th>car model</th>
                <th>car generation</th>
                <th>car energy</th>
                <th>car range</th>
                <th>created date</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @if ($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->fullname}}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phonenumber }}</td>
                        <td>{{ $user->car_brand }}</td>
                        <td>{{ $user->car_model }}</td>
                        <td>{{ $user->car_generation }}</td>
                        <td>{{ $user->car_energy }}</td>
                        <td>{{ $user->car_range }}</td>
                        <td>{{ $user->created_at}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                <a title="" data-id="{{ $user->id }}" data-bs-toggle="tooltip"
                                    class="edit-btn btn px-2 text-primary fs-3 py-2 formulaire-edit-btn"
                                    data-bs-original-title="Edit">
                                    <svg class="svg-inline--fa fa-pen-to-square" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="pen-to-square" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-pen-to-square"></i> Font Awesome fontawesome.com -->
                                </a>

                                <a title=""  data-bs-toggle="tooltip" data-id="{{ $user->id }}"
                                    class="btn px-2 text-danger fs-3 py-2 formulaire-delete-btn" data-bs-original-title="Delete">
                                    <svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-trash"></i> Font Awesome fontawesome.com -->
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="100">
                        <div class="text-center">
                            No records found.
                        </div>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
    <div id="editFormulaireModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Edit Formulaire</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                {{ Form::open(['id' => 'editFormulaireForm']) }}
                <div class="modal-body scroll-y">
                    <div class="alert alert-danger display-none hide" id="editValidationErrorsBox"></div>
                    {{ Form::hidden('formulaireId', null, ['id' => 'editFormulaireId']) }}
                    <div class="row">
                        <div class="form-group col-sm-12 mb-5">
                            {{ Form::label('Fullname', __('messages.common.fullname') . ':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::text('Fullname', null, ['id' => 'editFullName', 'class' => 'form-control ', 'required', 'placeholder' => __('messages.common.fullname')]) }}
                        </div>
                        <div class="form-group col-sm-12 mb-5">
                            {{ Form::label('Email', __('messages.common.email') . ':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::text('Email', null, ['id' => 'editEmail', 'class' => 'form-control ', 'required', 'placeholder' => __('messages.common.email')]) }}
                        </div>
                        <div class="form-group col-sm-12 mb-5">
                            {{ Form::label('PhoneNumber', __('messages.common.phonenumber') . ':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::text('PhoneNumber', null, ['id' => 'editPhoneNumber', 'class' => 'form-control ', 'required', 'placeholder' => __('messages.common.phonenumber')]) }}
                        </div>
                        <div class="form-group col-sm-12 mb-5">
                            {{ Form::label('Car_Brand', __('messages.common.car_brand') . ':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::text('Car_Brand', null, ['id' => 'editCar_Brand', 'class' => 'form-control ', 'required','disabled', 'placeholder' => __('messages.common.car_brand')]) }}
                        </div>
                        <div class="form-group col-sm-12 mb-5">
                            {{ Form::label('Car_Model', __('messages.common.car_model') . ':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::text('Car_Model', null, ['id' => 'editCar_Model', 'class' => 'form-control ', 'required','disabled', 'placeholder' => __('messages.common.car_model')]) }}
                        </div>
                        <div class="form-group col-sm-12 mb-5">
                            {{ Form::label('Car_Generation', __('messages.common.car_generation') . ':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::text('Car_Generation', null, ['id' => 'editCar_Generation', 'class' => 'form-control ', 'required','disabled', 'placeholder' => __('messages.common.car_generation')]) }}
                        </div>
                        <div class="form-group col-sm-12 mb-5">
                            {{ Form::label('Car_Energy', __('messages.common.car_energy') . ':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::text('Car_Energy', null, ['id' => 'editCar_Energy', 'class' => 'form-control ', 'required','disabled', 'placeholder' => __('messages.common.car_energy')]) }}
                        </div>
                        <div class="form-group col-sm-12 mb-5">
                            {{ Form::label('Car_Range', __('messages.common.car_range') . ':', ['class' => 'form-label required mb-3']) }}
                            {{ Form::text('Car_Range', null, ['id' => 'editCar_Range', 'class' => 'form-control ', 'required','disabled', 'placeholder' => __('messages.common.car_range'),'type'=>'Number']) }}
                        </div>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    {{ Form::button(__('messages.common.save'), ['type' => 'submit', 'class' => 'btn btn-primary me-2', 'id' => 'btnEditSave', 'data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                    <button type="button" class="btn btn-secondary btn-active-light-primary"
                        data-bs-dismiss="modal">{{ __('messages.common.cancel') }}</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
