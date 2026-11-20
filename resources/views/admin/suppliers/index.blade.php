@extends('layouts.admin.includes.main')
@section('title', 'suppliers')
@section('content')
<div class="nxl-content">
    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-body p-0">
                        <div class="d-flex justify-content-end p-3">
                            <a href="{{ route('suppliers.create') }}" class="btn btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Create Supplier</span>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="leadList">
                                <thead>
                                    <tr>
                                        <th class="wd-30">
                                            <div class="btn-group mb-1">
                                                <div class="custom-control custom-checkbox ms-1">
                                                    <input type="checkbox" class="custom-control-input" id="checkAllLead">
                                                    <label class="custom-control-label" for="checkAllLead"></label>
                                                </div>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>NIF</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suppliers as $supplier)
                                    <tr class="single-item">
                                        <td>
                                            <div class="item-checkbox ms-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkbox" id="checkBox_{{ $supplier->id }}">
                                                    <label class="custom-control-label" for="checkBox_{{ $supplier->id }}"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-truncate-1-line">{{ $supplier->name }}</span>
                                        </td>
                                        <td><a href="mailto:{{ $supplier->email }}">{{ $supplier->email }}</a></td>
                                        <td>{{ $supplier->NIF ?? '-' }}</td>
                                        <td><a href="tel:{{ $supplier->phone }}">{{ $supplier->phone }}</a></td>
                                        <td>{{ $supplier->address ?? '-' }}</td>
                                        <td>{{ $supplier->created_at?->format('Y-m-d') }}</td>
                                        <td>
                                            <div class="hstack gap-2 justify-content-end">
                                                <a href="{{ route('suppliers.show', $supplier) }}" class="avatar-text avatar-md">
                                                    <i class="feather feather-eye"></i>
                                                </a>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                        <i class="feather feather-more-horizontal"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('suppliers.edit', $supplier) }}">
                                                                <i class="feather feather-edit-3 me-3"></i>
                                                                <span>Edit</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST"
                                                                onsubmit="return confirm('Apagar este fornecedor?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item">
                                                                    <i class="feather feather-trash-2 me-3"></i>
                                                                    <span>Delete</span>
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

