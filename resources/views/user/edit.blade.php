<!-- inner section -->
<div class="innerpage-container">
    <div class="container sell-your-phone">
        <!-- MultiStep Form -->
        <form id="msform">
            <h2 class="text-center">Turn the device you have <br/>into the one you want.</h2>
            
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">{{ __('Profile') }}</li>
                <li>Model</li>
                <li>Storage</li>  
                <li>Cosmetic Condition</li>
                <li>Accessories</li>
                <li>Functional Issues</li>
                <li>Price</li>
                <li>Details</li>
            </ul>
          
            <!-- fieldsets -->
            <div class="clearfix">
                <fieldset>
                    <h3>{{ __('Please Complete your Profile') }}</h3>
                    <div class="form-group row">
                        <label for="car" class="col-sm-2 col-form-label">{{ __('Car') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="car">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="country" class="col-sm-2 col-form-label">{{ __('Country') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="country">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="city" class="col-sm-2 col-form-label">{{ __('City') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="city">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="site" class="col-sm-2 col-form-label">{{ __('Site') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="site">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="facebook" class="col-sm-2 col-form-label">{{ __('Facebook') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="facebook">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="instagram" class="col-sm-2 col-form-label">{{ __('Instagram') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="instagram">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="youtube" class="col-sm-2 col-form-label">{{ __('Youtube') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="youtube">
                        </div>
                    </div>
                    <br/><button type="button" class="next next-btn">{{ __('Next') }}</button> 
                </fieldset>
                
                <fieldset class="brand-section">
                    <h3>Select the brand of your Smartphone</h3>
                    <button type="button" class="next phone-bx"><span>Redmi</span></button> 
                    <button type="button" class="next phone-bx"><span>Iphone</span></button> 
                    <button type="button" class="next phone-bx"><span>Samsung</span></button>
                    <button type="button" class="next phone-bx"><span>Sony</span></button> 
                    <button type="button" class="next phone-bx"><span>Nokia</span></button> 
                     <!--one-step-logo-->
                    <button type="button" class="next phone-bx"><span>Moto</span></button> 
                    <button type="button" class="next phone-bx"><span>Micromax</span></button> 
                    <button type="button" class="next phone-bx"><span>LG</span></button>
                    <button type="button" class="next phone-bx"><span>Gionee</span></button> 
                    <button type="button" class="next phone-bx"><span>Oppo</span></button> 
                    <button type="button" class="next phone-bx"><span>ASUS</span></button> 
                    <!--two-step-logo-->
                </fieldset>

                <fieldset>
                    <h3>Select the model of Xiaomi you want to sell?</h3>    
                    <button type="button" class="next model-name">Xiaomi Mi A1</button> 
                    <button type="button" class="next model-name">Xiaomi Note 5 Pro</button> 
                    <button type="button" class="next model-name">Xiaomi Mi Max 2</button> 
                    <button type="button" class="next model-name">Xiaomi Mi 4i</button>
                    <button type="button" class="next model-name">Xiaomi Redmi 5A</button>
                    <button type="button" class="next model-name">Xiaomi Mi 4</button>
                    <br/>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                </fieldset>

                <fieldset>
                    <h3 class="bottom">Select the ROM of your Mi A1?</h3>
                    <label class="asscee-sec as-singl brand-bxa">8GB
                        <input type="checkbox" checked="">
                        <span class="checkmark"></span>
                    </label>
                    <label class="asscee-sec as-singl brand-bxa">16GB
                        <input type="checkbox" checked="">
                        <span class="checkmark"></span>
                    </label> 
                    <label class="asscee-sec as-singl brand-bxa">32GB
                        <input type="checkbox" checked="">
                        <span class="checkmark"></span>
                    </label> 
                    <label class="asscee-sec as-singl brand-bxa">64GB
                        <input type="checkbox" checked="">
                        <span class="checkmark"></span>
                    </label>  
                    <label class="asscee-sec as-singl brand-bxa">128GB
                        <input type="checkbox" checked="">
                        <span class="checkmark"></span>
                    </label>
                    <br/>
                    <div class="clearfix"> </div>
                    <br/><button type="button" class="next next-btn">Next</button> 
                    <br/><input type="button" name="previous" class="previous action-button" value="Previous" />  
                </fieldset>
              
                <fieldset>
                    <h3>Choose appropriate condition of your Mi A1</h3>
                    <button type="button" class="next model-name phone-condition"><strong>Flawless</strong><Br/>
                    Good as new. No scratches or dents.</button>     
                    <button type="button" class="next model-name phone-condition"><strong>Good</strong><Br/>
                    Has light scratches and is in 100% working order.</button>    
                    <button type="button" class="next model-name phone-condition"><strong>Fair</strong><Br/>
                    Phone switches , but the screen is cracked.</button>
                    
                     <Br/><input type="button" name="previous" class="previous action-button" value="Previous" />
                </fieldset> 
              
                <fieldset>
                    <h3>Select the accessories which are available with your Mi A1</h3>
                   
                    <label class="asscee-sec as-singl brand-bxa">Brand Box
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>   
                    <label class="asscee-sec as-singl">Ear Phone
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="asscee-sec as-singl">Valid Bill
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="asscee-sec as-singl">Adapter
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                 
                    <h3 class="margin-g">Choose the age of your phone</h3>        
                        <label class="asscee-sec as-singl pad">0-6 Months
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="asscee-sec as-singl">6-12 Months
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="asscee-sec as-singl">12-24 Months
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="asscee-sec as-singl">Above 24 Months
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    
                    <Br><button type="button" class="next next-btn">Next</button> 
                    <Br/><input type="button" name="previous" class="previous action-button" value="Previous" />  
                </fieldset>

                <fieldset>
                    <h3>Does your MI A1 switch on ?</h3>
                    <div class="issue">
                        <label class="asscee-sec brand-no"> Yes 
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>   
                        <label class="asscee-sec brand-no">No
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                   
                    <h3 class="margin-g">Select the functional issues (if any) in your Xiaomi Mi A1</h3>        
                    <label class="asscee-sec brand-bxa"> Screen Broken/Touchpad Or any Display Issue 
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="asscee-sec">Front Or Back Camera Not Working Or Faulty 
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="asscee-sec vlume-dft"> Volume Button Defect
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="asscee-sec vlume-dft">Wifi/GPS Not Working  
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    
                    <Br><button type="button" class="next next-btn">Next</button> 
                    <Br/><input type="button" name="previous" class="previous action-button" value="Previous" />  
                </fieldset>
             
                <fieldset class="sell-form">
                    <h3>Congratulations!! The best resale value for your MI A1 is </h3>
                    <div class="sell-price">RS 11940</div>    
                    <Br><button type="button" class="next next-btn">Sell it!</button> 
                    <Br/><input type="button" name="previous" class="previous action-button" value="Previous" />    
                </fieldset>
                
            </div>
        </form>
        <!-- /.MultiStep Form -->
    </div>
</div>

<script src="{{ asset('js/steps.js') }}" defer></script>
