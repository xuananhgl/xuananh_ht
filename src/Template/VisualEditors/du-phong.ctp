


  
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
   <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
  
 
    }
  body{  
    font-family: 'Roboto', sans-serif;
    box-sizing: border-box;
  }
 .line-article
 {
   -webkit-line-clamp: 4;
   -webkit-box-orient: vertical;
    overflow: hidden;
     display: -webkit-box;
  }
  </style>
 
<body class="bg-[<?=$banner->background_color?>] w-[100%] mx-auto px-0">
<div class="w-full h-[40px] bg-[#041839] mx-auto">
  <div class="max-w-[1024px] mx-auto flex justify-between items-center">
  <h1 class=" text-[24px] font-bold text-white hidden md:block">Dashboard</h1>
  
  <div class="max-w-[400px]">
<div id="dropdownDividerdiv" data-dropdown-toggle="dropdownDivider" class="text-white bg-transparent focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-white" type="div"> <?=__('Change region')?> <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></div>

<!-- Dropdown menu -->
<div id="dropdownDivider" class="hidden z-50 w-44 bg-white rounded z-50 divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 310px);">
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
      <li>
      <?= $this->Html->link(__x('listLanguage','Vietnamese'), '?lang=vi_VN', ['class'=>'pl-5 text-[14px] font-medium'])?>
      </li>
      <li>
      <?= $this->Html->link(__x('listLanguage','German'), '?lang=de_DE', ['class'=>'pl-5 text-[14px] font-medium'])?>
      </li>
      <li>
      <?= $this->Html->link(__x('listLanguage','English'), '?lang=en_US', ['class'=>'pl-5 text-[14px] font-medium'])?>
      </li>
      <li>
      <?= $this->Html->link(__x('listLanguage','Spanish'), '?lang=es_ES', ['class'=>'pl-5 text-[14px] font-medium'])?>
      </li>
      <li> 
        <?= $this->Html->link(__x('listLanguage','French'), '?lang=fr_FR', ['class'=>'pl-5 text-[14px] font-medium'])?>

      </li>
      <li>
         <?= $this->Html->link(__x('listLanguage','Nederlands'), '?lang=nl_NL', ['class'=>'pl-5 text-[14px] font-medium'])?>
      </li>
      <li>
      <?= $this->Html->link(__x('listLanguage','Polish'), '?lang=pl_PL', ['class'=>'pl-5 text-[14px] font-medium'])?>
      </li>
      <li>
      <?= $this->Html->link(__x('listLanguage','Português'), '?lang=pt_BR', ['class'=>'pl-5 text-[14px] font-medium'])?>
      </li>
      <li>
      <?= $this->Html->link(__x('listLanguage','Русский'), '?lang=ru_RU', ['class'=>'pl-5 text-[14px] font-medium'])?>
      </li>
      <li>
      <?= $this->Html->link(__x('listLanguage','Bokmål'), '?lang=nb_NO', ['class'=>'pl-5 text-[14px] font-medium'])?>
      </li>
      <li>
      <?= $this->Html->link(__x('listLanguage','Ελληνικά'), '?lang=el_GR', ['class'=>'pl-5 text-[14px] font-medium'])?>
      </li>
      <li>
      <?= $this->Html->link(__x('listLanguage','日本語'), '?lang=ja_JP', ['class'=>'pl-5 text-[14px] font-medium'])?>
      </li>
      <li>
      <?= $this->Html->link(__x('listLanguage','繁體中文'), '?lang=zh_CN', ['class'=>'pl-5 text-[14px] font-medium'])?>
      </li>
    </ul>
</div>
  <a class=" text-[18px] font-bold text-white" href="/logout"><?=__('Log Out')?></a>
</div>
</div>
</div>
<div class="main w-full mx-auto px-0">
        <div class="mx-auto bg-[#fff] h-[100px] ">     
            <nav class="border-gray-200 p-0 rounded dark:bg-gray-900 max-w-[1024px] mx-auto   ">
              <div class="flex flex-wrap justify-between mx-auto h-[100px] items-center">
                <a href="#" class="">
                <?= $this->Html->image('logo1.png', ['class'=>'mr-3 w-[150px] object-cover'])?>
                </a>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
                <div class="hidden w-full md:block md:w-auto z-40" id="navbar-default">
                  <ul class="flex flex-col p-4 mt-4 text-medium  bg-[#fff] rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                      <a href="#" class="block font-[600] border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent uppercase"><?=__('Companies')?></a>
                    </li>
                    <li>
                      <a href="#" class="block font-[600] border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent uppercase"><?=__('SECTOR PUBLIC')?></a>
                    </li>
                    <li>
                      <a href="#" class="block font-[600] border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent uppercase"><?=__('About')?></a>
                    </li>
                    <li>
                      <a href="#" class="block font-[600] border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent uppercase"><?=__('Contact')?></a>
                    </li>
                    <li>
                      <a href="#" class="block font-[600] border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent uppercase"><?=__('Blog')?></a>
                    </li>
                    <li>
                      <a href="#" class="block font-[600] border-2 md:border-0 md:hidden py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent uppercase"><?=__('Log Out')?></a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
  </div>
              <?= $this->Form->create($banner) ?>
  <div class=" max-w-[1571px] mx-auto">
              <!-- Extra Large Modal -->
              <div id="extralarge-modal" class="hidden fixed top-0 right-0 left-0 bottom-5 z-50 h-[800px] lg:h-full overflow-y-scroll w-screen p-1"> 
               <div class="w-full h-full bg-[#1C2A34] mx-auto" >
                <div class="flex justify-between items-center p-4">
                     <h3 class="font-bold text-[#ccc]">Banner</h3>
                    <button type="button" class="" data-modal-toggle="extralarge-modal"> 
                    <i class="fa-solid fa-circle-xmark text-[30px] text-[#ccc]"></i>                                     
                    </button>
                  </div>
                  <div class="lg:flex max-w-[1400px] h-[600px] mx-auto">
                    <div class="w-full relative mx-auto flex rounded-lg hover:border-2 border-sky-500 shadow-2xl p-5 bg-[<?=$banner->background_color?>] ">
                     

                          <div class="flex justify-center sm:justify-end z-0 lg:h-[420px] h-[500px] lg:h-full w-[90%] mx-auto">
                            <?= $this->Html->image($banner->image_url, ['class'=>'sm:h-[300px] sm:w-[533px] w-[375px] h-[250px]  object-cover md:shrink-0'])?></div>

                           <div class="absolute top-[180px] sm:top-0 ">
                                  
                           <div class="max-w-[630px] "> <textarea class="text-[<?=$banner->text_color?>] cursor-pointer focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-2 rounded-lg p-2 mt-5  xl:text-[70px] w-full sm:text-6xl text-4xl bg-[transparent] border-0 hover:bg-[transparent] font-medium mb-5"
                            name="title" required="required" maxlength="255" id="title" rows="3"><?=$banner->title?></textarea></div>

                           <div class="max-w-[420px] "> <textarea class="focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-2 rounded-lg p-2 cursor-pointer w-full text-[<?=$banner->text_color?>] md:text-[20px] text-sm mb-5
                             font-medium h-[auto] bg-[transparent] border-0 hover:bg-[transparent]" name="description" id="description"
                              rows="3"><?=$banner->description?></textarea></div>

                            
                            <input class="font-medium  max-w-[205px] h-[39px]  bg-[#FFD051] cursor-pointer focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-2 rounded-lg p-2 text-[<?=$banner->text_color?>] text-center rounded-full leading-[39px]"
                            name="btn_content" required="required" maxlength="99" id="btn-content" value="<?=$banner->btn_content?>">                    
                         </div>         
                      </div>
                        <div class="lg:w-[30%] relative h-[300px] md:h-[600px] bg-white rounded-lg mx-auto p-5 lg:ml-5 mt-5 lg:mt-0">
                              <h1 class="text-center font-bold text-[20px] bg-[#ccc] mb-3"><?=__('Dashboard')?></h1>
                            
                            <div class="flex md:block hover:border-1  focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-2 cursor-pointer ">
                            <div class="flex items-center"><p class="text-[16px] font-bold"><?=__('Background')?></p>
                              <input class="w-[40px] h-[40px] ml-4  focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-2 " type="color" name="background_color" id="background-color" value="<?=$banner->background_color?>"></div>
                              <div class="flex items-center"><p class="text-[16px] font-bold"><?=__('Color')?></p>
                              <input class="w-[40px] h-[40px] ml-4  focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-2" type="color" name="text_color" id="text-color" value="<?=$banner->text_color?>"></div>
                              <?= $this->Html->image($banner->image_url, ['class'=>' object-cover mx-auto mt-3 mb-3 rounded-lg hidden lg:block md:shrink-0'])?>
                            </div>
                              <p class="text-[16px] font-bold"><?=__('image-url')?></p>
                              <input class="w-full rounded-lg mt-3 p-2 " type="text" name="image_url" required="required" maxlength="255" id="image-url" value="<?=$banner->image_url?>"> 
                              <button data-modal-toggle="defaultModal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 absolute right-5 bottom-5 
                                           focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                     
                      </div>
                </div>     
                      
              </div>
             </div>  
            </div>
            
                <div class="max-w-[1024px] mx-auto border-0 relative mh-[500px] mt-[80px] md:mb-[126px] mb-[400px]">

                <div id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 absolute top-3 right-3 z-30"><i class="fa-solid fa-bars"></i></div>

                    <!-- Dropdown menu -->
                    <div id="dropdownDefaultCheckbox" class="hidden z-30 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"  data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 324px, 0px);">
                        <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                          <li>
                            <div class="flex items-center border rounded-lg p-2 z-40">  
                            <select name="banner_id" id="banner-id" class="max-w-[180px] text-[14px] p-1  text-center cursor-pointer">
                              <option  value="<?= $visualeditor->banner_id ?>"><?=__('Banner:')?> </option>
                              <?php foreach ($banner1 as $ban): ?>
                              <option value="<?= $ban->id?>"><?=__('Banner:')?><?=($ban->id)?></option>
                              <?php endforeach; ?>
                              
                            </select>
                              <button type="submit" class="mr-3 cursor-pointer hover:text-[24px]"><i class="fa-solid fa-display"></i></button>         
                            </div>
                          </li>
                          <li>
                            <div class="flex items-center border rounded-lg p-2">
                              <div class="block  text-black mx-auto flex  rounded-xl text-center h-[30px] items-center " data-modal-toggle="extralarge-modal">
                              <?=__('Editor:')?> <i class="fa-solid fa-pen text leading-[30px] ml-2 hover:text-[24px] cursor-pointer"></i>
                              </div>

                              </div>
                          </li>
                        
                        </ul>
                    </div>
              
                    <div class="flex md:justify-end  justify-start mt-[40px] mr-[50px] w-full z-50 max-w-[1024px]">
                      <?= $this->Html->image($banner->image_url, ['class'=>'lg:h-[412px] md:h-[300px] w-full object-cover max-w-[733px]'])?>
                  </div>
                      <div class="absolute md:top-[-44px] left-0 top-[130px] p-3 z-10">
                      <div class="sm:text-[70px] text-[50px] font-[500] md:leading-[76px] leading-[56px] max-w-[630px] text-[<?=$banner->text_color?>]"><?=$banner->title?></div>
                      <div class="text-[20px] font-medium mt-5"><p class="max-w-[420px] text-[<?=$banner->text_color?>] "><?=$banner->description?></p></div>
                      <div class="font-medium mt-5 max-w-[205px] h-[39px] bg-[#FFD051] text-center rounded-full "><a  class="leading-[39px] text-[<?=$banner->text_color?>]" href="#"><?=$banner->btn_content?></a></div>
                      <div class="font-medium mt-5 max-w-[150px] flex justify-between items-center text-[<?=$banner->text_color?>]" type="button" data-modal-toggle="large-modal" ><a class="leading-[40px]" href="#"><i class="fa-solid fa-circle-play text-[40px] text-[<?=$banner->text_color?>]"></i></a>Voir la vidéo</div>
                      <div class="block space-y-4 md:flex md:space-y-0 md:space-x-4"> 
                      <!-- Large Modal -->
                      <div id="large-modal" tabindex="-1" class="hidden overflow-y-auto  fixed top-0 right-0 left-0 z-50 w-full h-[600px] md:h-full justify-center items-center" aria-hidden="true">
                          <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                              <!-- Modal content -->
                              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                  <!-- Modal header -->
                                  <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                        Large modal
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="large-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                            <!-- Modal body -->
                              <div class="p-6 space-y-6">
                            
                              </div>
                        
                      </div>
                    </div>
                </div>
                          
                

                    </div>
                  </div>
                </div>
        </div>
            
                <div class=" max-w-[1571px] mx-auto pt-[80px] sm:p-0">
                <div class="max-w-[1571px] mx-auto mb-[80px]"> 
                <div class="max-w-[1024px] h-[422px] border rounded-[22px] bg-white p-[30px] relative mx-auto"> 
                                      
                    <div id="dropdownBgHoverButton" data-dropdown-toggle="dropdownBgHover" class="absolute right-3 cursor-pointer top-3 z-40 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fa-solid fa-bars"></i></div>

                    <!-- Dropdown menu -->
                    <div id="dropdownBgHover" class="hidden z-10 w-48 bg-white rounded shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 324px, 0px);">
                        <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownBgHoverButton">
                          <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 border">
                            <select name="testimonials_id" id="testimonials-id" class="max-w-[180px] text-[14px] text-center cursor-pointer">
                            <option value="<?= $visualeditor->testimonials_id ?>"><?=__('Testimonials:')?></option>
                            <?php foreach ($testimonial1 as $value): ?>
                            <option value="<?= $value->id?>"><?=__('Testimonial:')?><?=($value->id)?></option>
                            <?php endforeach;?>  
                            </select>
                             <button type="submit" class="ml-3 cursor-pointer hover:text-[24px]"><i class="fa-solid fa-display"></i></button>                    
                            </div>
                          </li>
                          <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 border">
                            <div class="block  text-center font-medium rounded-xl text-sm  text-center mr-2"data-modal-toggle="defaultModal">
                              <?=__('Editor:')?><i class="fa-solid fa-pen leading-[30px] ml-4 hover:text-[24px]"></i>
                              </div>
                         
                              </div>
                          </li>
                         
                        </ul>
                    </div>

                
                           
                      <!-- <div class="w-[190px] h-[422px] border bg-sky-500 hidden rounded-tr-[22px] rounded-br-[22px]"></div> -->
                    
                      <!-- Modal toggle -->
                          <!-- Main modal -->
                          <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden  overflow-auto fixed top-5 md:top-0 right-0 left-0 z-50 md:h-full h-[800px] overflow-y-auto ">
                              <div class="w-full overflow-y-auto  rounded-lg bg-white my-auto mx-auto">
                                  <!-- Modal content -->
                                  <div class=" rounded-lg shadow h-full overflow-auto bg-[#1C2A34] h-full">
                                      <!-- Modal header -->
                                      <div class="flex justify-between items-start p-4 h-[50px]">
                                          <h3 class="text-xl font-semibold text-white ">
                                              Editor-testimonial
                                          </h3>
                                          <button type="button" class="h-full" data-modal-toggle="defaultModal">
                                          <i class="fa-solid fa-circle-xmark hover:text-[30px] text-[#ccc] text-[24px]"></i>
 
                                          </button>
                                      </div>
                                      <!-- Modal body -->
                                  
                                      <div class="p-6 lg:flex items-center  h-[700px]  m-3 max-w-[1500px] mx-auto">
                                            <div class="lg:w-[1024px] max-w-[1024px] h-[500px] border rounded-[22px] bg-white p-[30px] relative mx-auto lg:mr-5">
                                              <div class=" font-medium text-[#ccc] flex justify-between w-full "><?=__('PRESSE ')?></div>
                                              <div class=""><?= $this->Html->image('https://i.pinimg.com/236x/c2/fc/c0/c2fcc0a977fd997263a9cd768c50578f.jpg')?></div>
                                              <div class="h-[45%]"><textarea class=" w-full text-[20px] italic bg-transparent border-0" name="description_testimonial" id="description-testimonial" rows="4"><?=$testimonial->description?></textarea></div>
                                  
                                              <input class="font-medium text-[18px] cursor-pointer focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-2 m" name="testimonial_author" maxlength="255" id="testimonial-author" value="<?=$testimonial->testimonial_author?>">
                                              <div class="absolute bottom-[18px] h-[50px]  flex flex-col md:flex-row justify-between w-11/12 text-[#ccc] text-[18px] mt-[30px]">
                                              <input class="w-[75%] h-[40px] cursor-pointer focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-2" name="testimonial_author_position" maxlength="255" id="testimonial-author-position" value="<?=$testimonial->testimonial_author_position?>">
                                              <a class="text-center md:text-left absolute md:bottom-[5px] right-5 bottom-[-15px] h-[30px]" href="#"> <i class="fa-solid fa-up-right-from-square"></i><?=__('Read the article')?></a> </div>
                                              </div>
                                             
                                            <div class="w-full lg:w-[30%] border rounded-xl p-3 mx-auto lg:h-[500px] bg-white relative">
                                              <h1 class="text-center mb-5 text-[20px] font-extrabold hidden md:block bg-[#CCC] text-white"><?=__('dashboard')?></h1>
                                              <?= $this->Html->image($testimonial->logo_url, ['class'=>'mx-auto p-2 rounded-lg border hover:border-2 object-cover'])?>
                                              <p class="font-bold"><?=__('url-logo')?>:</p><input class="border-2 pl-2 w-full cursor-pointer focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-2" type="text" name="logo_url" required="required" maxlength="255" id="logo-url" value="<?=$testimonial->logo_url ?>">
                                              <p class="font-bold"><?=__('Testimonial Url')?>:</p>
                                              <input class="border-2 pl-2 w-full cursor-pointer focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-2" type="text" name="testimonial_url" required="required" maxlength="255" id="testimonial-url" value="<?=$testimonial->testimonial_url?>">
                                              <button data-modal-toggle="defaultModal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 absolute right-5 bottom-5 
                                           focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                            </div>
                                        
                                      
                                      </div>
                                      <!-- Modal footer -->
                                      
                                  </div>
                              </div>
                          </div>

                        <div class=" font-medium text-[#ccc] flex justify-between w-full "><?=__('PRESSE')?></div>
                        <div class=""><?= $this->Html->image('https://i.pinimg.com/236x/c2/fc/c0/c2fcc0a977fd997263a9cd768c50578f.jpg')?></div>
                        <div class=" md:h-2/5 h-[30%] md:text-[24px] text-[20px] italic font-[400] leading-[24px] text-[#041839]"><?=$testimonial->description?></div>
                        <div class="font-medium md:text-[18px] text-[16px] text-[#041839]"><?=$testimonial->testimonial_author?></div>
                        <div class="absolute bottom-[30px] flex flex-col md:flex-row justify-between w-11/12 text-[#ccc]  text-[18px]"><?=$testimonial->testimonial_author_position?> 
                        <a class="text-right md:text-left" href="#"> <i class="fa-solid fa-up-right-from-square"></i><?=__('Read the article')?></a> </div>
                      </div>
                      <!-- <div class="w-[190px] h-[422px] border bg-sky-500 hidden rounded-tl-[22px] rounded-bl-[22px]"></div> -->
                       
                       
               

                    </div> 
              </div>     
                 
                    <div class="w-full bg-[#041839] mx-auto ">
                      <div class="md:flex justify-center mb-[100px] pt-[100px] items-center">
                        <h1 class="md:text-[50px] text-[35px] text-white md:w-[200px] font-bold text-center text-[#049BF7]"><?=__('TO SHORTEN IT')?>.</h1>
                        <div class="md:ml-[60px] text-center"><p class="text-white max-w-[739px] font-bold md:text-[26px] text-[20px] text-center md:text-start">
                        <?=__('Z0 Gravity is a multi-project management software:')?></p>
                        
                          <p class="text-white max-w-[739px]  md:text-[26px] text-[20px] text-center md:text-start"><?=__('whatever their complexity, you easily manage the schedules, budgets and human resources of your projects through cross-functional and collaborative use.')?></p>
                          
                        </div>
                      </div>

                  
                  
                    <div class="max-w-[1024px] h-[678px] md:flex mx-auto justify-between bg-[#FF7D66] md:rounded-[22px] mb-[100px]">
                          <div class="pl-5 mb-[80px]  md:mb-0 ">
                            <h1 class="text-white md:text-[40px] text-[30px] mt-5 text-center md:text-left mt-[150px] font-medium"><?=__('Our objective :')?></h1>
                            <p class="max-w-[400px] text-[#1C2A34]  md:text-[20px] text-[18px] text-center md:text-left mx-auto md:mx-0 mt-5"><?=__('It means helping any type of organization to carry out its projects with a single watchword:')?></p>
                            <h4 class="md:text-[40px] text-[30px] text-[#1C2A34] text-center md:text-left font-medium"> <?=__('sim-pli-ci-ty !')?></h4>
                          
                          </div>
                            <div class=""> <?= $this->Html->image('m1.jpg', ['class'=>'md:w-[400px] md:h-[100%] h-[500px] w-full  md:rounded-tr-[22px] md:rounded-br-[22px] object-cover'])?></div>

                    </div>
                          <div class="mx-auto max-w-[1024px] text-center">
                            <h1 class="text-[#049BF7] md:text-[40px] text-[30px] font-medium"> <?=__('Discover the universe z0 Gravity')?></h1>
                            <p class="text-[#F1F6FA] max-w-[700px] text-center mx-auto mt-5"><?=__('Schedules, budgets, calendars… In the blink of an eye, you have a global and strategic vision of the progress of your projects in real time!')?></p>
                            <div class=" bg-[#FFD051] rounded-full mt-5 h-[39px] max-w-[230px] mx-auto leading-[39px]"> <i class="fa-solid fa-play"></i> <?=__('Video presentation')?> </div>
                          </div>
                          <div class="max-w-[1571px] mx-auto mt-[100px]">
                          <?= $this->Html->image('app.jpg', ['class'=>'mx-auto object-cover'])?>
                        
                          </div>
  </div>       
        <div class="w-full bg-white ">       
                            <h1 class="text-[40px] font-bold text-center mb-[100px] pt-[80px]"><?=__('You are…')?></h1>
                            <div class=" lg:flex gap-5 justify-center ">
                            <div class="text-center border rounded-lg h-[343px] p-[34px] max-w-[318px] flex flex-col justify-between my-5 mx-auto lg:mx-0">
                            <?= $this->Html->image('ZG_icon_home_entreprise@3x.png', ['class'=>'max-w-[100px] text-[14px] p-1 mx-auto object-cover'])?>                          
                              <h3 class="text-[#049BF7] text-[20px] font-bold"> <?=__('A company')?></h3>
                              <p><?=__('Teamwork: unite your teams around a common goal.')?></p>
                              <div class="text-white w-[230px] h-[39px] leading-[39px] text-center bg-[#049BF7] rounded-full mx-auto cursor-pointer"><a href="#"> <?=__('3,2,1… Go ')?></a></div>
                            </div>

                            <div class="text-center border rounded-lg h-[343px] p-[34px] max-w-[318px] flex flex-col justify-between my-5 mx-auto lg:mx-0">
                            <?= $this->Html->image('ZG_icon_home_collectivites@3x.png', ['class'=>'max-w-[100px] text-[14px] p-1 mx-auto object-cover'])?>
                              <h3 class="text-[#FF7D66] text-[20px] font-bold"><?=__('A community')?> </h3>
                              <p><?=__('Bring together the actors of your project via a common software!!')?></p>
                              <div class="text-white w-[230px] h-[39px] leading-[39px] text-center bg-[#FF7D66] rounded-full mx-auto cursor-pointer"><a href="#"><?=__('Find out how')?></a></div>
                            </div>

                            <div class="text-center border rounded-lg h-[343px] p-[34px] max-w-[318px] flex flex-col justify-between my-5 mx-auto lg:mx-0">
                            <?= $this->Html->image('ZG_icon_home_promeneur@3x.png', ['class'=>'max-w-[100px] text-[14px] p-1 mx-auto'])?>
                              <h3 class="text-[20px] font-bold text-[#FFD051]"><?=__('A lost walker')?> </h3>
                              <p><?=__('Welcome ! Sit down and let yourself be guided.')?></p>
                              <div class="text-white w-[230px] h-[39px] leading-[39px] text-center bg-[#FFD051] rounded-full mx-auto cursor-pointer"><a href="#"><?=__('Lets start here')?></a></div>
                            </div>

                          </div>

                   <div class="max-w-[1571px] mx-auto relative ">

           <h1 class="text-center text-[40px] font-bold mt-[200px] mb-[50px]"><?=__('Nos articles')?></h1>                           
           
          <!-- Main modal -->
          <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden  fixed top-5 right-0 left-0 h-[750px] lg:h-full z-50 overflow-y-scroll ">
             
                  <!-- Modal content -->
                  <div class="  rounded-lg shadow mx-auto py-5  relative h-screen">
                  <div class="flex justify-between p-4 items-center h-[50px] fixed top-0 right-0 left-0">
                    <h3 class="text-xl font-semibold text-[#ccc]"> <?=__('Editor-article')?> </h3>
                    <div class="absolute top-1 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                      <i class="fa-solid fa-circle-xmark hover:text-[30px] text-[24px] text-[#ccc]"></i></div>
              </div>
            <div class=" p-5 h-[800px] w-full mt-[80px] md:flex mx-auto items-center">
             
              <div class=" max-w-[676px] h-[454px] bg-white border mx-auto rounded-lg  p-4 mb-5 lg:flex ">
                <div class=" ">
                <?= $this->Html->image($article->img_url, ['class'=>'mx-auto object-cover h-[200px] lg:h-full w-[300px]'])?></div>
                <div class="lg:ml-4">
                  <div class="max-w-[600px]"><textarea class=" text-[24px] font-bold w-full text-bold text-[24px] bg-transparent border-0 leading-[32px]" name="title_article" id="title-article" rows="3"><?=$article->title?></textarea></div>                        
                  <div class="max-w-[600px] flex items-center h-[30px]"><input class="text-[#FF7D66] bg-[#FF7D6626] w-[40%] text-[14px] p-1 mb-3" name="category" maxlength="255" id="category" value="<?=$article->category?>"><p class=
                              "text-[13px] leading-[20px] font-medium ml-3"> 
                                <?php echo $article->modified->timeAgoInWords([
                                    'accuracy' => ['month' => 'month'],
                                    'end' => '1 year'
                                ])?></p></div>
                  <div class="max-w-[600px]"><textarea class=" w-full bg-transparent border-0 line-article" name="description_article" id="description-article" rows="6"><?=$article->description?></textarea></div>                
                              
               </div>                          
              </div>
              <div class=" max-w-[400px] h-[500px] mx-auto border rounded-lg p-5 bg-white md:ml-5 overflow-y-scroll relative ">
                <h3 class="text-[24px] font-semibold text-center bg-[#ccc]"><?=__('Dashboard')?></h3>              
                <?php
                          echo $this->Form->control('user_id', ['options' => $users, 'class'=>'font-semibold mt-3 mb-3']);
                          echo $this->Form->control('tag_string', ['type' => 'text', 'class'=>'font-semibold mt-3 mb-3 w-full border']);
                       ?> 
                      <?= $this->Html->image($article->img_url, ['class'=>'mx-auto object-cover h-[100px] w-[250px] rounded-lg'])?>
                   <h1 class="font-semibold mt-2 mb-2 "><?=__('img-url')?></h1>           
                  <input class="w-full border" type="text" name="img_url" required="required" maxlength="255" id="img-url" value="<?= $article->img_url?>">
                  <h1 class="font-semibold mt-2 mb-2 "><?=__('Article-url')?></h1>
                  <input class="w-full border" type="text" name="article_url" required="required" maxlength="255" id="article-url" value="<?=$article->article_url?>">
                  <button  type="submit" class="absolute bottom-3 right-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Save</button>
                </div>
             
            </div>
                                         
              
              
        
  </div>
                  </div>
                    
                <div class="max-w-[1024px] mx-auto relative">

                <button id="dropdownHelperButton" data-dropdown-toggle="dropdownHelper" class="absolute right-5 top-3 z-20 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"><i class="fa-solid fa-bars"></i></button>

                  <!-- Dropdown menu -->
                  <div id="dropdownHelper" class="hidden z-20 w-60 bg-white rounded divide-y divide-gray-100 shadow " data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 5287px);">
                      <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHelperButton">
                        <li>
                          <div class="flex items-center p-2 rounded hover:bg-gray-100 border">
                          <select name="article_id" id="article-id" class="max-w-[180px] text-[14px] text-center cursor-pointer">
                              <option value="<?= $visualeditor->article_id ?>"><?=__('article:')?> (<?= $visualeditor->article_id ?>)</option>
                              <?php foreach ($article2 as $list): ?>
                              <option value="<?= $list->id?>"><?=__('article')?>:<?=($list->id)?> </option>
                              <?php endforeach;?>  
                              </select>
                              <button type="submit" class="ml-3 cursor-pointer hover:text-[24px]"><i class="fa-solid fa-display"></i></button>       
                            
                          </div>
                        </li>
                        <li>
                          <div class="flex items-center p-2 rounded hover:bg-gray-100 border">
                          <div class="block  text-center font-medium rounded-xl text-sm  text-center mr-2" 
                          data-modal-toggle="authentication-modal">
                          <?=__('Editor:')?><i class="fa-solid fa-pen leading-[30px] ml-4 hover:text-[24px]"></i>
                          </div> 
                            
                          </div>
                        </li>
                      
                      </ul>
                  </div>
      
                     <div class="md:flex">
                          <div class=" max-w-[318px] h-[454px] border rounded-[22px]  mx-auto md:mx-0 p-[23px] relative">
                            <p class="w-[30px]"></p>
                              <div class="max-w-[280px] mx-auto"> <?= $this->Html->image($article1[0]['img_url'], ['class'=>'w-full max-h-[126px]'])?></div>
                              <h1 class="text-[24px] font-bold text-[#041839]"><?= $article1[0]['title']?></h1>
                              <div class="flex items-center"><p class="text-[13px] leading-[20px] font-medium text-[#FF7D66] bg-[#FF7D6626] "><?= $article1[0]['category']?><p class=
                              "text-[13px] leading-[20px] font-medium ml-3"> 
                                <?php echo $article1[0]['modified']->timeAgoInWords([
                                    'accuracy' => ['month' => 'month'],
                                    'end' => '1 year'
                                ])?></p></p>
                                </div>
                              <p class="line-article text-[13px] leading-[20px] font-medium text-[#041839]"><?= $article1[0]['description']?></p>
                              <div class="absolute bottom-[20px] left-[20px] border-[#049BF7] border-2 max-w-[180px] text-[14px] p-1 text-center rounded-full "><a class="text-[#049BF7]" href="#"><?=__('Read the article')?></a></div>
                          </div>
                          <div class="max-w-[676px] h-[454px]  border-2  rounded-[22px] flex p-[23px]  mt-[30px] md:mt-0 md:ml-[30px]">
                            <div class="h-[440px]">
                              
                            <?= $this->Html->image($article->img_url, ['class'=>'w-[292px] h-[399px] hidden lg:block'])?> 
                            </div>
                              <div class=" pl-4 max-w-[330px] relative mx-auto md:border-0 border rounded-[22px]">
                              <P class="font-bold w-[30px] h-[30px] rounded-full border-2 text-center"><?= $article->id?></P>
                              <h1 class=" text-[24px] font-bold text-[#041839]"><?=$article->title?></h1>
                              <div class="flex items-center"><p class="text-[13px] leading-[20px] font-medium text-[#4CC6A0] bg-[#4CC6A026] "><?= $article->category?><p class=
                              "text-[13px] leading-[20px] font-medium ml-3"> 
                                <?php echo $article->modified->timeAgoInWords([
                                    'accuracy' => ['month' => 'month'],
                                    'end' => '1 year'
                                ])?></p></p>
                                </div>
                              <p class="text-[13px] leading-[20px] font-medium text-[#041839]"><?= $article->description?></p>
                              <div class="absolute bottom-0 left-[20px] border-[#049BF7] border-2 max-w-[180px] text-[14px] p-1 text-center rounded-full h-[30px]"><a class="text-[#049BF7]" href="#"><?=__('Read the article')?></a></div>
                          </div>
                          </div>
                    </div>
                    <div class="md:flex">

                          <div class="relative max-w-[492px] h-[454px] p-[23px] border rounded-[22px] mt-[30px] mx-auto">
                              <h1 class="text-[24px] font-bold text-[#041839]"><?= $article1[2]['title']?></h1>
                              <div class="flex items-center"><p class="text-[13px] leading-[20px] font-medium text-[#1C9DF4] bg-[#1C9DF426]"><?= $article1[2]['category']?><p class=
                              "text-[13px] leading-[20px] font-medium ml-3"> 
                                <?php echo $article1[2]['modified']->timeAgoInWords([
                                    'accuracy' => ['month' => 'month'],
                                    'end' => '1 year'
                                ])?></p></p>
                                </div>
                              <p class="text-[13px] leading-[20px] font-medium text-[#041839]"><?= $article1[2]['description']?></p>
                              <div class="absolute bottom-[20px] left-[20px] border-[#049BF7] border-2 max-w-[180px] text-[14px] p-1 text-center rounded-full "><a class="text-[#049BF7]" href="#"><?=__('Read the article')?></a></div>
                          </div>
                        <div class="relative max-w-[502px] h-[454px] p-[23px] border rounded-[22px] md:ml-[30px]  mt-[30px] mx-auto">                      
                              <h1 class="text-[24px] font-bold text-[#041839]"><?= $article1[3]['title']?></h1>
                              <div class="flex items-center"><p class="text-[13px] leading-[20px] font-medium text-[#EAAB00] bg-[#FFD05166] "><?= $article1[3]['category']?><p class=
                              "text-[13px] leading-[20px] font-medium ml-3"> 
                                <?php echo $article1[3]['modified']->timeAgoInWords([
                                    'accuracy' => ['month' => 'month'],
                                    'end' => '1 year'
                                ])?></p></p>
                                </div>
                              <p class="text-[13px] leading-[20px] font-medium text-[#041839]"> <?= $article1[3]['description']?></p>
                              <div class="absolute bottom-[20px] left-[20px] border-[#049BF7] border-2 max-w-[180px] text-[14px] p-1 text-center rounded-full"><a class="text-[#049BF7]" href="#"><?=__('Read the article')?></a></div>
                         </div>
                      
                </div>
              </div>
            </div>  
        
      
            <div class="w-[230px] h-[39px] leading-[39px] text-center text-white bg-[#049BF7] rounded-full hover:bg-sky-700 
            active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 mx-auto mt-5 mb-[150px] cursor-pointer"><a href="#"><?=__('See all articles')?></a></div>
            <h1 class="text-center md:text-[40px] text-[30px] font-bold"><?=__('Enough about us.')?> </h1>
            <h1 class="text-center md:text-[40px] text-[30px] mb-5"><?=__('Tell us about you !')?></h1>
            <div class="w-[230px] h-[39px] leading-[39px] text-center text-white bg-[#FF7D66] rounded-full hover:bg-[#ea580c]
            active:bg-[#7f1d1d] focus:outline-none focus:ring focus:ring-violet-300 mx-auto mb-[50px] cursor-pointer"><a href="#"><?=__('On discute !')?>!</a></div>
        
          <footer class= "w-full bg-[#041839] ">
            <div class="max-w-[1024px]  pt-[59px] mx-auto">
            <div class="max-w-[790px] md:flex justify-between">
              <div class="">
              <img src="https://www.z0gravity.com/storage-z0G/2019/05/z0_Gravity_Logo_BlancBleu-1.svg" alt="" class="w-[200px] mx-auto md:mx-0">
              <p class="text-[#049BF7] text-[12px] text-center md:text-left mb-4"><?=__('Ensemble, on va plus loin.')?></p>
              </div>
            <div class="text-white text-center mb-4 text-[16px] leading-[33px] cursor-pointer">
              <a href="#"><?=__('Companies')?></a><br>
              <a href="#"><?=__('Communities')?> </a><br>
              <a href="#"><?=__('À propos')?></a><br>
              <a href="#"><?=__('Contact')?></a><br>
              <a href="#"><?=__('Blog')?></a>
            </div>
            <div class="mx-auto md:mx-0 w-[220px]"> 
              <p class="text-[#049BF7] text-[11px] mb-2 text-center md:text-left"><?=__('FOLLOW US')?></p>
              <div class="text-center md:text-left cursor-pointer">
              <i class="text-white text-[20px] mr-4 fa-brands fa-facebook-f "></i>
              <i class="text-white text-[20px] mr-4 fa-brands fa-twitter t"></i>
              <i class="text-white text-[20px] fa-brands fa-vimeo-v mx-auto"></i>
            </div>
              <div class="w-[230px] h-[39px] cursor-pointer leading-[39px] text-center text-white rounded-full ring-2 ring-[#049BF7] hover:ring-[#33629A] mt-5"><i class="fa-solid fa-globe"></i> <?=__('Change region')?> </div>
            </div> 
          </div>
            <div class="max-w-[1024px] gap-2  text-white flex flex-wrap-reverse justify-center md:justify-start mt-[81px] text-[#049BF7] text-[12px]">
             <div class=""> <a href=" mx-auto md:mx-0"><?=__('')?>© 2019 Globalsi SAS </a></div><div class="gap-2 flex"><a href="#"><?=__('')?><?=__('Plan du site')?>  </a><a href="#"><?=__('Contactez-nous')?></a><a href="#"><?=__('Legal Notice')?></a></div>
          </div>
</div>
          </footer>
</div>
</div>
   
<?= $this->Form->end() ?> 
</body>
</html>

