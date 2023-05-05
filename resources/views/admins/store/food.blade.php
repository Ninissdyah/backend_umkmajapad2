@extends('layouts-admin.app')

@section('content')
<section class="home-section plus-bottom1">
    <div class="text">I STORE</div>
    <div class="coloumn-detail">
        <div class="form-group">
            <select name="category" class="form-select form-control @error('category') is-invalid @enderror">
                <option value="">Category</option>
                <option value="Food And Drink">Food and Drink</option>
                <option value="Clothes" >Clothes</option>
                <option value="Art">Art</option>
                <option value="Furniture" >Furniture</option>
                <option value="Electronics">Electronics</option>
                <option value="Beauty And Health">Beauty and Health</option>
            </select>
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror  
        </div>
    </div>
    <div>
        <table>
            <tr>
                <th class="no">No</th>
                <th>Store Name</th>
                <th>Latest Activity</th>
                <th class="action">Action</th>
            </tr>
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr><tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr><tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="no">1</td>
                <td>Store Name</td>
                <td>22-02-2023</td>
                <td class="action">
                    <div class="action-flex">
                        <a href="#"><i class='bx bx-trash'></i></a>
                        <a href="#"><i class='bx bx-right-arrow-circle'></i></a>
                    </div>
                </td>
            </tr>
        
        </table>
    </div>
</section>
@endsection