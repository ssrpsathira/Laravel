@extends('layout.main')

@section('title')

    Welcome Page

@endsection

@section('body')

    <h2>Register</h2>

    

    
    <form method="post" class="register" action= "{{ route('signup') }}" >
            <p>
                <label for="first_name">First Name<span class="required"></span></label>
                <input type="text" name="first_name">
            </p>
            <p>
                <label for="last_name">Middle Name</label>
                <input type="text" name="mid_name">
            </p>
            <p>
                <label for="last_name">Last Name<span class="required"></span></label>
                <input type="text" name="last_name">
            </p>
            <p>
                <label for="company_name">Company Name<span class="required"></span></label>
                <input type="text" name="company_name">
            </p>
            <p>
                <label for="company_reg_no">Company Registration Number<span class="required"></span></label>
                <input type="text" name="company_reg_no">
            </p>
            <p>
                <label for="contact_no">Contact No.<span class="required"></span></label>
                <input type="text" name="contact_no">
            </p>
            <p>
                <label for="reg_email">Email <span class="required">*</span></label>
                <input type="email" name="email">
            </p>
            <p>
                <label for="reg_password">Password <span class="required">*</span></label>
                <input type="password" name="password">
            </p>
            <p>
                <label for="re_enter_password">Re Enter Password<span class="required"></span></label>
                <input type="password" name="re_enter_password">
            </p>
            <p class="auth-submit">
                <input type="submit" value="Register">
            </p>

            {{ csrf_field() }}

        </form>


@endsection