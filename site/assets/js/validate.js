jQuery.validator.setDefaults({
    debug: false,
    success: "valid"
  });
// signup form
  $( "#signupForm" ).validate({
    rules: {
        fullname: {
        required: true,
        minlength: 10,
        maxlength: 30,
      },

    },
    messages: {
        "fullname": {
            required: "Bắt buộc nhập họ và tên",
            minlength: "Hãy nhập tối thiểu 10 ký tự",
            maxLength: "Hãy nhập tối đa 30 ký tự",
        },
        "address": {
            required: "Bắt buộc nhập address",
        },
        "phonenumber": {
            required: "Bắt buộc nhập phonenumber",
        },
        "email": {
            required: "Bắt buộc nhập email",
            email: "Vui lòng nhập đúng định dạng email"
        },
        "username": {
            required: "Bắt buộc nhập username",
        },
        "password": {
            required: "Bắt buộc nhập password",
        },
        "reenterpass": {
            required: "Bắt buộc nhập lại mật khẩu",
            equalTo: "Hai password phải giống nhau",
            // minlength: "Hãy nhập ít nhất 8 ký tự"
        }
    }
  });
// signin form
  $( "#signinForm" ).validate({
    rules: {
        username: {
        required: true,
        minlength: 10,
        maxlength: 30,
      },
      password: {
        required: true,
        
      }

    },
    messages: {
        "username": {
            required: "Bắt buộc nhập username",
            minlength: "Hãy nhập tối thiểu 10 ký tự",
            maxLength: "Hãy nhập tối đa 30 ký tự",
        },
        "password": {
            required: "Bắt buộc nhập password",
        }
    }
  });
// forgotpassForm form
  $( "#forgotpassForm" ).validate({
    rules: {
        username: {
        required: true,
        minlength: 10,
        maxlength: 40,
      },
      email: {
        required: true,
        email: true,
      }

    },
    messages: {
        "username": {
            required: "Bắt buộc nhập username",
            minlength: "Hãy nhập tối thiểu 10 ký tự",
            maxLength: "Hãy nhập tối đa 40 ký tự",
        },
        "email": {
            required: "Bắt buộc nhập email",
            email: "Nhập đúng định dạng email",
        }
    }
  });
// forgotpassForm form
  $( "#updateaccountForm" ).validate({
    rules: {
        tai_khoan: {
        required: true,
        minlength: 10,
        maxlength: 40,
      },
      ho_ten: {
        required: true,
      }
      ,diachi: {
        required: true,
        
      }
      ,sodienthoai: {
        required: true,
        digits: true
      }
      ,email: {
        required: true,
        email: true
      }
      ,hinh_anh: {
        required: true,
      }

    },
    messages: {
        "tai_khoan": {
            required: "Bắt buộc nhập username",
            minlength: "Hãy nhập tối thiểu 10 ký tự",
            maxLength: "Hãy nhập tối đa 40 ký tự",
        },
        "ho_ten": {
            required: "Bắt buộc nhập họ tên",
        },
        "diachi": {
            required: "Bắt buộc nhập địa chỉ",
           
        },
        "sodienthoai": {
            required: "Bắt buộc nhập số điện thoại",
            digits: "Nhập đúng định dạng số",
        },
        "email": {
            required: "Bắt buộc nhập email",
            email: "Nhập đúng định dạng email",
        },
        "hinh_anh": {
            required: "Bắt buộc nhập hình ảnh",
        }
    }
  });
// changepassForm form
  $( "#changepassForm" ).validate({
    rules: {
        newpass: {
        required: true,
      },
        renewpass: {
        required: true,
        // equalTo: "#newpass"
      },
     
    },
    messages: {
        "newpass": {
            required: "Bắt buộc nhập mật khẩu mới",
        },
        "renewpass": {
            required: "Bắt buộc nhập lại mật khẩu",
            // equalTo: "Bắt buộc nhập giống mật khẩu"
        }
    }
  });
// checkoutForm form
  $( "#checkoutForm" ).validate({
    rules: {
        fullname: {
        required: true,
      },
      phonenumber: {
        required: true,
        // equalTo: "#newpass"
      },
      email: {
        required: true,
        email: true
        // equalTo: "#newpass"
      },
      address: {
        required: true,
        // equalTo: "#newpass"
      }
     
    },
    messages: {
        "fullName": {
            required: "Bắt buộc nhập tên đầy đủ",
        },
        "phonenumber": {
            required: "Bắt buộc nhập số điện thoại",
            // equalTo: "Bắt buộc nhập giống mật khẩu"
        },
        "email": {
            required: "Bắt buộc nhập email",
            email: "Bắt buộc nhập đúng định dạng email"
        },
        "address": {
            required: "Bắt buộc nhập lại địa chỉ nhận hàng",
            // equalTo: "Bắt buộc nhập giống mật khẩu"
        }
    }
  });