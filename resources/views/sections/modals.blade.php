
<div class="modal fade show" id="appointmentModal" style="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="{{ url('/send_form') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
      <div class="modal-body">
        <div class="accordion" id="accordionExample">
          <div  id="collapseOne" class="accordion-collapse collapse show" data-parent="#accordionExample">
            <p style="font-weight: bold; margin-bottom: 5px"> To apply for E-Bikes in installments, you need to fulfill the following conditions:</p>
            <ul>
              <li>Have an active rider contract with mjam for at least 3 months</li>
              <li>Have earned at least € 1,000 per month in the last 3 months</li>
              <li>Have a registered address in Austria</li>
              <li>Have an Austrian bank account</li>
            </ul>
            <p style="font-weight: bold; margin-bottom: 5px"> In order to process you request, we will need the following documents from you:</p>
            <ul>
              <li>A valid Austrian or EU ID <span style="font-size: 13px">(eg passport, driving license etc.)</span></li>
              <li>Your last 3 payslips from mjam  <span style="font-size: 13px">(if you have an additional job, you can include these payslips as well)</span>.</li>
              <li>A valid bank card issued from an Austrian bank (e.g. Visa, Master, Maestro etc.) </li>
            </ul>

            <p style="font-size: 13px">
              *In some cases, you might need additional documents. If it is the case, we will let you know.
            </p>
            <div class="">
              <a style="position: absolute; left: 15px; bottom: 35px; text-decoration: none; color: black; text-decoration: underline; cursor: pointer" data-toggle="modal" data-target="#appointmentModal" aria-expanded="false" aria-controls="collapseOne">
                Cancel
              </a>

              <button class="button button--shadow mb-1" 
              data-toggle="collapse" data-target="#collapse2" 
              aria-expanded="false" aria-controls="collapse2" style="padding-left: 40px; padding-right: 40px; padding-top: 0px; padding-bottom: 0px !important; height: 46px; margin-left: auto; background-color: #FF8000 !important; border-color: #FF8000 !important; color: white !important">
                  Continue
              </button>
            </div>
          </div>
          <div  id="collapse2" class="accordion-collapse collapse" data-parent="#accordionExample">
          <h5 class="d-flex mb-0" style="font-weight: bold; font-size: 15px">PERSONAL INFO <span style="color: #FF8000; margin-left: auto; font-weight: 600; font-size: 20px">STEP 1/5</span></h5>
            <br>
            <div class="form-group mb-2">
              <input name="full_name" required type="text" placeholder="Full name*" class="form-control custom-input">
            </div>
            <div class="form-group mb-2">
              <input name="phone_number" required type="text" placeholder="Phone number*" class="form-control custom-input">
            </div>
            <div class="form-group mb-2">
              <input name="email_adress" required type="text" placeholder="Email adress*" class="form-control custom-input">
            </div>
            <br><br>
            <h5 class="d-flex mb-0" style="font-weight: bold; font-size: 15px">ADRESS</h5>
            <br>
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="form-group mb-2">
                  <input name="street_adress" required type="text" placeholder="Street adress*" class="form-control custom-input">
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="form-group mb-2">
                  <input name="city" required type="text" placeholder="City*" class="form-control custom-input">
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="form-group mb-2">
                  <input name="state_or_province" type="text" placeholder="State/Province" class="form-control custom-input">
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="form-group mb-2">
                  <input name="zip_code" type="text" placeholder="ZIP code" class="form-control custom-input">
                </div>
              </div>
            </div>
            <br><br>
            <a style="position: absolute; left: 15px; bottom: 40px; text-decoration: none; color: black" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Previous step
            </a>
            <div class="text-right ">
              <button class="button button--shadow mb-1" onclick="validateStep2()"  style="padding-left: 40px; padding-right: 40px; padding-top: 0px; padding-bottom: 0px !important; height: 46px; margin-left: auto; background-color: #FF8000 !important; border-color: #FF8000 !important; color: white !important">
                  Continue
              </button>
            </div>
          </div>
          <div  id="collapse3" class="accordion-collapse collapse" data-parent="#accordionExample">
            <h5 class="d-flex mb-0" style="font-weight: bold; font-size: 15px">UPLOAD YOUR FILES <span style="color: #FF8000; margin-left: auto; font-weight: 600; font-size: 20px">STEP 2/5</span></h5>
            <p>Files should be .png or .jpeg</p>
            <br><br>
            <p style="font-weight: bold; margin-bottom: 0px">A valid Austrian or EU piece of ID*</p>
            <p>Passport and Driving Licence are also accepted</p>

            <div>
              <div class="file-upload text-center">
                <label class='file-upload__label' id="file_label1">
                <svg style="margin-bottom: 10px" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M36.4479 7.57709C36.6924 7.96298 36.2722 8.41167 35.8269 8.30953C35.8221 8.30843 35.8174 8.30734 35.8126 8.30625C34.9313 8.04375 33.9563 7.9125 32.9626 7.9125H26.556C26.3988 7.9125 26.2508 7.83855 26.1563 7.71287L23.8688 4.66875C23.8548 4.64889 23.8407 4.6291 23.8265 4.60938C23.5759 4.26048 23.8099 3.75 24.2395 3.75H29.4751C32.4072 3.75 34.9895 5.27562 36.4479 7.57709Z" fill="#FF8000"/>
                  <path d="M37.7625 12.2625C36.9562 11.6813 36.0375 11.25 35.0438 11.0062C34.3688 10.8187 33.675 10.725 32.9625 10.725H25.9875C24.9 10.725 24.825 10.6313 24.2438 9.8625L21.6187 6.375C20.4 4.74375 19.4437 3.75 16.3875 3.75H12.0375C7.4625 3.75 3.75 7.4625 3.75 12.0375V32.9625C3.75 37.5375 7.4625 41.25 12.0375 41.25H32.9625C37.5375 41.25 41.25 37.5375 41.25 32.9625V19.0125C41.25 16.2188 39.8812 13.7625 37.7625 12.2625ZM26.9813 30.6375H18C17.2688 30.6375 16.7062 30.0563 16.7062 29.325C16.7062 28.6125 17.2688 28.0125 18 28.0125H26.9813C27.7125 28.0125 28.2938 28.6125 28.2938 29.325C28.2938 30.0563 27.7125 30.6375 26.9813 30.6375Z" fill="#FF8000"/>
                </svg>
                <br>
                Drag & Drop your files here.</label>
                <input type="file" accept="image/jpeg, image/png"  required name="step2[]" multiple="true" id="file_input1" class='file-upload__input'>
              </div>
              <br>
              <br>
              <br>
            </div>
            <a style="position: absolute; margin-top: -40px; left: 15px; text-decoration: none; color: black" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
              Previous step
            </a>
            <div class="text-right" style="position: absolute; margin-top: -40px; right: 15px">
              <button class="button button--shadow mb-1" onclick="validateStep3()" style="padding-left: 40px; padding-right: 40px; padding-top: 0px; padding-bottom: 0px !important; height: 46px; margin-left: auto; background-color: #FF8000 !important; border-color: #FF8000 !important; color: white !important">
                  Continue
              </button>
            </div>
          </div>
          <div  id="collapse4" class="accordion-collapse collapse" data-parent="#accordionExample">
          <h5 class="d-flex mb-0" style="font-weight: bold; font-size: 15px">UPLOAD YOUR FILES <span style="color: #FF8000; margin-left: auto; font-weight: 600; font-size: 20px">STEP 3/5</span></h5>
            <p>Files should be .png or .jpeg</p>
            <br><br>

            <p style="font-weight: bold; margin-bottom: 0px">Last 3 Payslips you got from MJAM*</p>
            <p>If you have an additional job, you can also include payslips from other company)</p>

            <div>
              <div class="file-upload text-center">
                <label class='file-upload__label' id="file_label2">
                <svg style="margin-bottom: 10px" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M36.4479 7.57709C36.6924 7.96298 36.2722 8.41167 35.8269 8.30953C35.8221 8.30843 35.8174 8.30734 35.8126 8.30625C34.9313 8.04375 33.9563 7.9125 32.9626 7.9125H26.556C26.3988 7.9125 26.2508 7.83855 26.1563 7.71287L23.8688 4.66875C23.8548 4.64889 23.8407 4.6291 23.8265 4.60938C23.5759 4.26048 23.8099 3.75 24.2395 3.75H29.4751C32.4072 3.75 34.9895 5.27562 36.4479 7.57709Z" fill="#FF8000"/>
                  <path d="M37.7625 12.2625C36.9562 11.6813 36.0375 11.25 35.0438 11.0062C34.3688 10.8187 33.675 10.725 32.9625 10.725H25.9875C24.9 10.725 24.825 10.6313 24.2438 9.8625L21.6187 6.375C20.4 4.74375 19.4437 3.75 16.3875 3.75H12.0375C7.4625 3.75 3.75 7.4625 3.75 12.0375V32.9625C3.75 37.5375 7.4625 41.25 12.0375 41.25H32.9625C37.5375 41.25 41.25 37.5375 41.25 32.9625V19.0125C41.25 16.2188 39.8812 13.7625 37.7625 12.2625ZM26.9813 30.6375H18C17.2688 30.6375 16.7062 30.0563 16.7062 29.325C16.7062 28.6125 17.2688 28.0125 18 28.0125H26.9813C27.7125 28.0125 28.2938 28.6125 28.2938 29.325C28.2938 30.0563 27.7125 30.6375 26.9813 30.6375Z" fill="#FF8000"/>
                </svg>
                <br>
                Drag & Drop your files here.</label>
                <input type="file" accept="image/jpeg, image/png" required name="step3[]" multiple="true" id="file_input2" class='file-upload__input'>
              </div>
              <br>
              <br>
              <br>
            </div>
            <a style="position: absolute; margin-top: -40px; left: 15px; text-decoration: none; color: black" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
              Previous step
            </a>
            <div class="text-right" style="position: absolute; margin-top: -40px; right: 15px">
              <button class="button button--shadow mb-1" onclick="validateStep4()" style="padding-left: 40px; padding-right: 40px; padding-top: 0px; padding-bottom: 0px !important; height: 46px; margin-left: auto; background-color: #FF8000 !important; border-color: #FF8000 !important; color: white !important">
                  Continue
              </button>
            </div>
          </div>
          <div  id="collapse5" class="accordion-collapse collapse" data-parent="#accordionExample">
          <h5 class="d-flex mb-0" style="font-weight: bold; font-size: 15px">UPLOAD YOUR FILES <span style="color: #FF8000; margin-left: auto; font-weight: 600; font-size: 20px">STEP 4/5</span></h5>
            <p>Files should be .png or .jpeg</p>
            <br><br>
            <p style="font-weight: bold; margin-bottom: 0px">A valid bank card (Visa, Master, Maestro,...) issued from an Austrian bank.</p>
            <br>
            <div>
              <div class="file-upload text-center">
                <label class='file-upload__label' id="file_label3">
                <svg style="margin-bottom: 10px" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M36.4479 7.57709C36.6924 7.96298 36.2722 8.41167 35.8269 8.30953C35.8221 8.30843 35.8174 8.30734 35.8126 8.30625C34.9313 8.04375 33.9563 7.9125 32.9626 7.9125H26.556C26.3988 7.9125 26.2508 7.83855 26.1563 7.71287L23.8688 4.66875C23.8548 4.64889 23.8407 4.6291 23.8265 4.60938C23.5759 4.26048 23.8099 3.75 24.2395 3.75H29.4751C32.4072 3.75 34.9895 5.27562 36.4479 7.57709Z" fill="#FF8000"/>
                  <path d="M37.7625 12.2625C36.9562 11.6813 36.0375 11.25 35.0438 11.0062C34.3688 10.8187 33.675 10.725 32.9625 10.725H25.9875C24.9 10.725 24.825 10.6313 24.2438 9.8625L21.6187 6.375C20.4 4.74375 19.4437 3.75 16.3875 3.75H12.0375C7.4625 3.75 3.75 7.4625 3.75 12.0375V32.9625C3.75 37.5375 7.4625 41.25 12.0375 41.25H32.9625C37.5375 41.25 41.25 37.5375 41.25 32.9625V19.0125C41.25 16.2188 39.8812 13.7625 37.7625 12.2625ZM26.9813 30.6375H18C17.2688 30.6375 16.7062 30.0563 16.7062 29.325C16.7062 28.6125 17.2688 28.0125 18 28.0125H26.9813C27.7125 28.0125 28.2938 28.6125 28.2938 29.325C28.2938 30.0563 27.7125 30.6375 26.9813 30.6375Z" fill="#FF8000"/>
                </svg>
                <br>
                Drag & Drop your files here.</label>
                <input type="file" accept="image/jpeg, image/png" required name="step4[]" multiple="true" id="file_input3" class='file-upload__input'>
              </div>
              <br>
              <br>
              <br>
            </div>
            <a style="position: absolute; margin-top: -40px; left: 15px; text-decoration: none; color: black" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
              Previous step
            </a>
            <div class="text-right" style="position: absolute; margin-top: -40px; right: 15px">
              <button class="button button--shadow mb-1" onclick="validateStep5()" style="padding-left: 40px; padding-right: 40px; padding-top: 0px; padding-bottom: 0px !important; height: 46px; margin-left: auto; background-color: #FF8000 !important; border-color: #FF8000 !important; color: white !important">
                  Continue
              </button>
            </div>
          </div>
          <div  id="collapse6" class="accordion-collapse collapse" data-parent="#accordionExample">
          <h5 class="d-flex mb-0" style="font-weight: bold; font-size: 15px"> <span style="color: #FF8000; margin-left: auto; font-weight: 600; font-size: 20px">STEP 5/5</span></h5>
            
            <div class="text-center">
            <br><br><br>
            <svg width="104" height="104" viewBox="0 0 104 104" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="104" height="104" fill="url(#pattern0)"/>
              <defs>
              <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
              <use xlink:href="#image0_14_1987" transform="scale(0.00520833)"/>
              </pattern>
              <image id="image0_14_1987" width="192" height="192" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADACAYAAABS3GwHAAAWj0lEQVR4Xu1d+28bV3Y+1IMiKYmURL1lS7JiOX4lfiUOursFWhQtFgWKAosFigLtoinyNxVo0aI/FC0W6B/Q/tYC7bZo4kdiO5YtyZKs94viQxRJkSJZfNceL8OIGpJz78ydmZPAUJSxKGo09zvn+853zgmUyqVqV0cXlStl6uzopLPKGfHnfD/88jwEqtVqtVKtUEegg6rVKgUCAeLP+X745nk4K59VGfk58vk18osIwMjPkc+vkT/AHIA5j585H3MA5jz+5nzMAVj98jMHZA7A6pev1T/mAFz38HXdhzkAcwDmAH7OAf1S8fSrzm/2+2UOwByAOYCfdWBGRn/XQZgDMAdgDsAcgL1Afo2EzAGYAzAHYA4gz/+fPk0T/jkuHlOViLLFrLCan5RORL9F4awgdPfcWY4iXRHxMdQZEmlIsDNIpXKJIt0R8Rr4WKmUqb8nSh0UoGhPVDysoa4Q929I6l9hDtAmB8ADi4c9d5YXD/lp+VT8Mf6BuxIPq4rPcYD6g/3i4PQFe6m3u5d6Ont8jeRt9y+wF6g5L1CulKN8uUCHuUMqVoqUOk2JB7BQLvwAyZ36HIctHo5TuCtMo5EREVE4sptHduYAF3AApDHp0wwdFY4of5YXYK4S2WW+PtKnaDBKI5FhCneGudOvQaRnL1CdFyhzmqHjUpZ2sjvioTFydKeQXcb3jwVj4jBM9I1TZ6CTI0NNDzxzgECASpUSpQop2s3tEVIdmUisggNYeX/gC8PhOI1GRimAf9vkQG3n3Lp9Pz9zAOTJ65l1gfjZUlarnF4G8l/EUaD7j/eOUzw0RH3BPt9OA/ElB0CaA7RPFpKuyelVRhKkSJN9E0JN8gyyNxlpfMUBoN4sJZeFXOnmnF6V+jQWGaOR8DANhgZ9U2fwBQeATr+V3RbSpUokVaX7W8n52/l5o8F+mo3NipTQ8xzByxwAv7zV1CqlixlPqDmqkL+2Il0bGaf7LxOiAirPXvUKeZIDgNzu5fZpI7NBFCBlFVm7kdmJ74di2kTvhJBQEeG8xhE8xwFAcLeyW3RYSGhRoVWt5tj1+t0d3XQjft1zdQRPcQBImrsne1Sld5PevJKTO4H8je4f1CJEBEQGT0wU9AIHqFCFnh+8oHK1zOqODd6k4fAwTfVOCneqWc+t7tddzwEO8wlaS68J1NcJKdtRX9z0/sEFLvVfooned9zArWqRazlAsVwUuf5mdstXFVy7cv5m6yRQkK7HP6ZKpeLK/RKu5ADw67xJr3zw7bgJOb0YGdCLAIIc7Ai6LxK4jQMk8glaP97wnXdHN+Svfz+oE9yM3xDKm5t6zF3FAaDwbBxviGYPLyKpFyLZ3MAcDYfirokEruEAa+m3lCgkuKL7voe42RzdicgxF5uj8ciYKyKBKzjAm9SKePhZ11fTY6wi8sBCMROd1j8S6M4BXh8tinzfCSSz23vjte831TdF8BOhaKarl0hbDgAPz+LREqWLaUZ+RdMlVCB/fQUZjfpzsSvCQ6Tj9lFtOQAjvx7TJmREXkSCmf5pLTmBlhyAc373TJ9oVo3TlhPoxgFY7fEO8tdzGh3VIa04AHT+9eN1zvldnPObuXB1qxNowwFQ4V3LvGW1xwU6v1W16u7IHW0qxlpwAHh7Fo5eCams2ZzSDGn4ur79EJhHdGf0Uz28Q05zALg6l1LLYvygVWThr9dnVqmZeoRDcG/sruMuUsc5wGp6jQ7zh4z87++AnyLXQM8AfTx0zdF+Akc5QKqYppeJl4z8Gk2ZNkNu2dchj17qn3Kss8wxDoDU59nBc+7k8iHy11agUSGGjRpT6RzpLHOKAzzZe8o9vD5G/tpIgh7jj2JzYkOO3T3EjnAATG/YOdnlHl4X7RtQrc5h2gQsE3bPHbKdA2Buz2JyifLlPM/tqdkRprO/3w51DUa5u6N3bJ87ZCsHwA/5MrEgFsb5Se2ww3XphfuJ9U63h2/ZO4HOTg6QKBzRYnKRkZ+Rv2HFH0O3oArZ1T9gGwc4q57R071veVYnT6y70OuF5plPhm8LQmxH/4BtHGA5ucxTmhn5m/J6oYvsUt8lW/oHbOEAmM//8miBXZ4ednnK5iCfjnxiz34COzjAamZVyJ52qAl+V1NU/Pwg8Y/2ntDPJn9i2+xVDNsCIVZdF1DOAbBf98Xh9+z1cWnFF7+/f1r4FzrIH9AX4w/pD2f+wLZIfmPouhjAq7JCrJwDwO7AO7nc49KsrdDizP79i3+k9Gn6AxI/GLtPP5/5I1siAXxCaKhXufFeKQdA0Qs+f9bB3dfjayD/fm7/B78/5Pr3R+/RH1/5uS2RwPAJKasQq+QA6PDaOdlh3d9l6s95yG/k4sbH2/Fb9Kcf/YnySNDX3ScG76qqCyjjAEh7vjt4xhVfl+n+tTm/kXvXTuTD4FscAjsjAeoCqBKrqAso4wCs+7tvukMzyO9EJJjun6ZLfVNK6gJKOECpUqLv9p8Ju7NqFyG//rs7YFWHb5Tzm91fuyLB5+OfEdoopW+iUcEBuNMr0lTFU5e6SDvIb3ckgEcIlmnZdQElHOD54YsP21usIhN/vdrpDmY5v9n9t4sToGMMipBsNUg6B4D0+Tq5qFwdUFHxbLQxXReklv3+ZCC/nZHg4fjn0vsFpHOAzewmbWd3LOekZsjD161FhnZz/mY4we9f/j366eTvSK8TYOnGdHRarhokmwM82n0sHn7Z0wP49XLSvFQqkN+IBCPhYfrq9l9TsVKU9n6NyBcLxuhW/KZUNUgqBzguHovKL29y0XeTi9Wcvz7y1nKAscgo/ermX4iJb2aRot3rn4zcpnBnWJoaJJUD7Of3aTn1RvrJ92oOLjunN3s9tyJ/7e9/KDREV2Kz0tQgqRwAxjcgjAxdmnN8azl+/f1TmfPbgfzGzxPpjog0SJoaJIsDYMDt94mXrP6U9asAIyX5m2d/+wNXZ7160+7nKnP+RpH/p5M/EURYhktUGgc4LCRoJbXC6o9m3h+Q0X9+9Wvazm5/8NVb4Wh25/znZQKz0VkajYxIUYOkcQDe6aUn8v/d838QK2bbRfhGX+cE8hscB/3C6BuWsZFeGgdA9bdwVlDG/pkTtMYJDOTfOt6Sysnwe7Az5z9PLeru6Kb7Y/fkdIrJ4AC4Kb/Z/h9WfzSZ9Ymc34vIX8sJ0C4JQmzVGySFA2C9EeRPVn+suzKtRjov5vzncZb5wauE/QJW1SApHGAvt08r6RXu/HK488sPyG84AkbCIzQbm7HcKSaFAywkXtFx6ZgrwA7O/fFyzn9eZjEYGqT5gavWK8IyOACGXqVOU8wBHOIAfkJ+wwWM3P/hxOfOcwCczm92H7H649DcH5U5P9KMv7r1l0q9PVY4D5QgKEJW5gZZ5gCYGYN5/+zPt78OoBL5Yz0x+ur2l+JY6+rFktEfYJkDJE+TtJRc5gqwzRVglTk/8usvb/5KTGJo17VpBdmbVROxVikejlurCFvlAJvHmwQViP368vz6Zq5OvyO/cX+uDV6j4VDcUkXYch1g43iTdt/v+2r25FrxotiBLDq/P5U5v1uQ3/j9wI4xNzDnLAeABJotZZkD2OACZeT/4bQNLNWDJ8iKK9QyB3h19JoyxQxzAMUcgHP+H3uh+sXYxBvOcgDs+61S1VUc4Pnh93RtcJ5iwagrIhcj//lzlgZ7BgmeICuuUMscAPM/sfVdZ7WgNqf/j83/pN9s/S+NRkbpz6//GUWD/VpXsDnnb+yC7Qx00mfjD5zlAP+387UwJLmhDgDHKh5+o6ljqn+Kfjn/C20jASP/xRP2MDkag3Md5QCP9h5RpVrVngMYyF8fqXSNBJzzm/c/UJWEHcLS1GirdYD/2vpv7V2g9chvRABdIwEjf/OzVbGsw1EO8GjvsdY5tIH8Rv2g0VwbXSIB5/zmyF/L6b6YeOgsB0AE0NUrYob8ukUCRv7mkd/gnHdGPnWWA3y9+42WnWCNcn4ztcqpSMA5f2vIb0RyRABHOQBUILBwnbxArSK/05GAkb915MfzBk/Q3ZE7znKAp/vfirY0M2S167pZzm/mJTIOg12RgHP+9pBf+M4oIFQgR/sBvt75RkigOtQBrCK/3ZGAkb895Dc4ZzQYFWMSHa0DYB4Q5k6aIavq64/3n9K/rf679EikKhJwzt8+8huu457OHgIJdpQDvDj8XmyCd5oDYDT7rxf/lTAIqh7JrX4uu2LMyG8N+Y1+gNHwKF0d+MhZDrCSXiXMBbIrx78okiASGYegke7faiSSzQk457eO/EYdAHOBPh665iwHwD7g5GlKCw4AZNA5EjDyy0F+gwNgSO5E77izHGA3t0vrmQ3HOUAtstdGAtmRqV1OwDm/POQ3OACG5GJ1qqMc4CB3QOvHG45zgHoOolMkYOSXi/wGB/h0+BOCI9RRLxDkz+cHL7TgAPU9yTpwAs755SO/wQGwN7j/fT9HuxvkLc8Fwkh0MRrdhp5Ys2kJ5113MhIw8qtBfoMD/O7Uz/SYDfp47wmVq2VtXaFOcALO+dUhPyK9UQNoF/k/TJW22g+AGY2rmTXaOdnR1hVqtzrEyK8W+fH7RBS4NXzT+dmgOElQgXAAdJ8LZAcn6OkMKtvJ5ba5PSqfh8m+SZrqm9RjP8BJ6YSeHT7XvjPMjkhQKpeU7ORyw6zOdjhauw6C2egMjURG9OAAsEJgOoTOE9XsqhPIrjvgfTPy/3jzzoOx+4SpEFpwAOiwj3Yfi/lAuqpBdtYJrHqPar+ekf/HU7dhgcA8ICsuUFj48fWW5wIZbBqeoMP8oVYVYbMcVAUnaNVr1KhHmZH/XSw9734OhYaECc5SBTgQEF9vuQ5gnKTdkz3aym5pVxE2yzFV1gmsRAJG/sb7Fm7Gb9JAMGapAmxsl7Q8G9TIwXCaUA+QnQPb8Xoq6wStvn9G/sbIb3DMu6N3RB3ASieY1DqA4cV4nVyko8KRK9QgXTkBI//Fm3awEgkHwMg8tNgTbJzEt5l12svtuUYNssM7ZMYJjDSJkd8c+fE3MBId+r9l9Uc2B8BJPKueEcak6DonqBmd2ilOwMjf3I41kF/cK6vIL50DGDkV6gGoC5ghn87X7eQEjPzNIT/uE9Kfe6N3pag/SjgAdNW19FtRCTVTX3S/blckYORvDvnxvMzF5mg8MiZF/ZFeBzByMqD/s4PnrlSD7OAEnPO37xLFCJS+YJ8c9UcFBzDUoKXkEh0WEq5Ug+xShxj5m0d+cErZ6o8yDoBIgK2RaJN0izeolYpxq7p+/d/nnL/5nL/2+ZmLXaHh8LA09UcZBzBOlps2x9ipDjHyt4b88Jah7xfen1BXSJr6o4wDGCdrLfOW9nP7rlaDZHACzvnbz/mN+w/kRwSQ4f35gPwqOQDUoGwxS6gM6672tPr+2lWHGPlbR34jMn8x/lBYn61Mf2hUN5DmBao/Wfj89dEipU5T2neKmXGAiyKBGSfgnL+9nN+oE6EXAsWv854v7bxA9f5sSKJP9p96Qg1qVx1i5G8f+aH+4OHHIZDl/amPBNL6ARp5MxaTS5Q+TXuiLtAMJ+Cc33rOb6g/IL9ofJeC9O9zfts4gHHSkoUkLafeuKZTTBYnYOS3hvxQfz4beyD0fxmdX45wAOPkLiQW6LiU9UxdwCwScA/v+Z1crdSF0PZ4bXBevu5fHwlkzAUyY+decImaRQZDHYKR7qvbX4qUz82uWLOfV/X1+YGrFO2JStf9becAv60LrNF+7sBTdYHzIgH+X7gr7EnO06pa1u7fHw7FaW5gTonubzsHMNg7ZoguHL2ibCnLyNgZ8iwnshoZ8Lx8Nv6AqEpKdP96NUlpHaCevW9nd2jjeMNzdYF2ka6VnFjn/gmZP/90dJrGIqPqdH8nOEAtR/h2/zsxSNcqUvDX5zwXSZH6zA/OC9VHle7vGAfwYr+ATOQzqyh7/Tp2/t4Q8/7l+v3NKsjS5gK10qO5l9unlfSKJyvEHJnai0wj4RGajc3YhvxK+wHMXHsIb6+OXhOG6nod2fjnM/cCweaMfb8qK74NI4EddYDz6gSZ0wwtpZYFF2jGj8/I2h6y6j6rFWB5f+weIQVSWfFtxCmUe4EuysF2TnaFKsRqSNW3kfBK7AqNqOj0auD9cawO0IgjLCTe1QZ0Ryp+f9a9PfWR/lLfFF3uv+wI8jvKAWo5QoUqYsskdmpxJPBPJIh0Rz6MODfjjEqvO8UBanMyHIIne09F8YORVj7S6saxYHOG1wcjTlpRD1VwBEc5QO3JzhQzQhnyS8XTr+oQQM5oclGK7G7hALWRIFVM08vES89VONkV+lvv00TvBE32TTiO/NpwgPpOss3sJsEzxJFAXmeVLhVrjDWE10cH5Fc+F8iKl2P7ZJswVoWR0zuu0WgwSvODV7VBfuVzgazOb3+TXqFEPsGRIOD+SDDYMygefq2QX/VcIKvsHicU4xWxd4wjgXsjARSoG/Hr2iG/thygNnIAMbB9kiOB9R5bJzgVkP/q4EeivmPmynTsug51ALOeYuYEEdf1T+ia8zveD9DuSWd1yNxVyWpPpeVI40g/QLsVPa4T6B8JdNP5zdRIW3uCZfi9UTHGzFEKEHuHqvp4hwBqmOCMmUg6qj3a9QOYncyLrhsGOvQWs3fIee/QUGiIZvqntfD2tKo+auMFarVugEOwnHxD6WKaI4GDkQCz+2ei08LS7Crk170O0OxJ3jzeEsu5ubPM3kiAh/3q4FWKBaOO+vmtZBJQH13HAc6LFOgtXk2vcY+xTZEAPbwfD16jns4e9bM7m3R1tqsuBtxQBzCrE+B6sVykg/whbR5vCkTiHmL5PcThzrBYVOfE9AarSK9lT7CKnBFLOTCOPVfK8QQ6kldB7u3upZnojO1ze9pG9iYjh6vqAM1EAuOkgxsc5A94FumZtUiA+zkbm6V4aMjWiW3NckCrkcETHKBRJEFaBDOd16dSq6oAY1Th5ehlsaBONRI79vpe4QAXIQH2Eywllwmz+7luYK4WTfSO02h41Jb5/HYhvW84wEVIgmFc2yc7nt1ZZjUSoFkdBBcW5lbrMm79+57lABchC4jyemZDKEWsFuUI/h3k+Cq3MTqN9I7uCFOh9sjIGZES7Z7seW6jfTORAHn9UHiIJnsnKNgZ9G6Ob6YG+YEDNKMeoRE/fZqiw0LC07NKsXURxLa3K0IoaOmKzFbVnWa/3rVeIFU5J9Kjg9wBHRWShP92opNK9oQ8PPTD4TihQwvDqGS4clXdfxmRvZWfz5ccoNl+BKhHiAzgCUeFI1dFBjz0Y72j4j1jZ7HfkZ45QKDDEvKBxyAqYB0qNt/jcMhGaiuvh3QG1Vo87NFgv/DptIKEdiOvNt+POUC5rW2EsFqUKiVKFlLiMBzlj0S6ZEedAUukO6iDBkIDFOzopng4LqzIzUa2ZjhRszm02yMLcwCLkaEWyXAg8Cdfyotp1/hYoSqVykUqVc6EYQ+HBA9NFXtAa7w6HWL+D1F3Z7dQZIId75QZIDvSmVBXj/gIlMcyCa/k4E5HAuYAlTNGzo4u33IET3uBOAeucqTgOkB7Ob5fcmC35/BW3z9zAIkcQNeKN0fCxpGQOQBzAF9zIOYAZjkiX3fltIem1SWuAzBH8HNdgDkAcwBfV4yZAzAHYA7A6kXrU4WbzjGZQ+jNIZgDMAdgDlDliiF7awJ6I7WiSMocgDkAcwDmAMwBfMtpmAMwB2AOwByAXZOKcmzdI8v/A9+IolT93ajSAAAAAElFTkSuQmCC"/>
              </defs>
            </svg>
            <p style="font-size: 25px; font-weight: bold; margin-top: 10px">Congrats!</p>
            <p style="width: 90%; margin-left: 5%">
              Your submit was sent. We’ll contact you in the 
              shortest time possible.
            </p>
            </div>
            <br><br>  
            <div class="text-center">
              <button class="button button--shadow mb-1" data-dismiss="modal" style="padding-left: 40px; padding-right: 40px; padding-top: 0px; padding-bottom: 0px !important; height: 46px; margin-left: auto; margin-right: auto; background-color: #FF8000 !important; border-color: #FF8000 !important; color: white !important">
                  Complete
              </button>
            </div>
          </div>
        </div>
      </div>


      </form>
    </div>
  </div>
</div>

<script>
  document.getElementById('file_input1').addEventListener('change', () => {
      document.getElementById('file_label1').innerHTML = document.getElementById('file_input1').files.length + " file(s) uploaded";
  });

  document.getElementById('file_input2').addEventListener('change', () => {
      document.getElementById('file_label2').innerHTML = document.getElementById('file_input2').files.length + " file(s) uploaded";
  });

  document.getElementById('file_input3').addEventListener('change', () => {
      document.getElementById('file_label3').innerHTML = document.getElementById('file_input3').files.length + " file(s) uploaded";
  });

  function validateStep2() {
    if(!document.getElementsByName("full_name")[0].value)
      return;
    if(!document.getElementsByName("phone_number")[0].value)
      return;
    if(!document.getElementsByName("email_adress")[0].value)
      return;
    if(!document.getElementsByName("street_adress")[0].value)
      return;
    if(!document.getElementsByName("city")[0].value)
      return;
    $("#collapse3").collapse('toggle');
  }

  function validateStep3() {
    if(!document.getElementById('file_input1').files.length) 
    {
      alert("Please upload a valid Austrian or EU piece of ID");
      return;
    }

    $("#collapse4").collapse('toggle');
  }

  function validateStep4() {
    if(!document.getElementById('file_input2').files.length) 
    {
      alert("Please upload last 3 payslips");
      return;
    }

    $("#collapse5").collapse('toggle');
  }

  function validateStep5() {
    if(!document.getElementById('file_input3').files.length) 
    {
      alert("Please upload a valid credit card");
      return;
    }

    $("#collapse6").collapse('toggle');
  }
</script>

<div class="modal fade" id="calendlyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="margin: 0px">
    <div class="modal-content" style="width: 100vw">
      <div class="modal-body" style="height: 90vh; padding-top: 0px; padding-bottom: 0px">
          <iframe src="https://calendly.com/chainge-at/probefahrt" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
