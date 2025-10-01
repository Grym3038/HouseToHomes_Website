<?php include('Views/_partials/header.php'); ?>
<?php require 'Models/IndexPageInfo.php'; ?>


<div  class=" text-black gap-10 lg:w-[90%] m-auto">
<!-- hero section -->
<section class="m-2 mt-8 rounded-2xl bg-My-Tan drop-shadow-2xl ">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-2xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl "><?php echo htmlspecialchars($data['TopParagraph'][0][0]); ?></h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl "><?php echo htmlspecialchars($data['TopParagraph'][1][0]); ?></p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white bg-blue-700 hover:bg-blue-800 rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 ">
                Get Started
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="?action=RequestEstimate" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-[#ccc6c2] rounded-lg hover:bg-[#e6dedb] focus:ring-4 focus:ring-gray-100">
                Request an Estimate
            </a> 
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex rounded-2xl">
            <img src="/Lib/Images/DSC_9048.jpg" alt="DSC_9048.jpg" class="rounded-2xl drop-shadow-sm">
        </div>                
    </div>
</section>
</div>
<!-- Services cards -->
<section id="features" class="container mx-auto px-4 space-y-6 bg-My-Tan py-8 md:py-12 lg:py-20 ">
    <div class="mx-auto flex max-w-[58rem] flex-col items-center space-y-4 text-center text-[#534B6F]">

        <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-6xl">Services</h2>

        <p class="max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">
            Take a look at the range of services we offer. we're here to make your life a little easier!
        </p>

    </div>

    <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3 text-[#534B6F]">

      <?php if (isset($data['error'])) : ?>
        <div class="relative overflow-hidden rounded-xl border-2 bg-[#fffaf8] select-none hover:shadow hover:shadow-[#ccc6c2] p-2">
            <div class="flex h-[180px] flex-col justify-between rounded-xl p-6">
                <div class="space-y-2">
                    <h3 class="font-bold"><?php echo htmlspecialchars($data['error']); ?></h3>
                    <p class="text-sm text-muted-foreground"></p>
                </div>

            </div>
        </div>
      <?php else : ?>
            <?php foreach($data['ServiceCards'] as $row){ ?>
          <div
            class="relative overflow-hidden rounded-xl border-2 bg-[#fffaf8] select-none hover:shadow hover:shadow-[#ccc6c2] p-2">
            <div class="flex h-[180px] flex-col justify-between rounded-xl p-6">

                <div class="space-y-2">
                    <h3 class="font-bold"><?php echo htmlspecialchars($row[0]); ?></h3>
                    <p class="text-sm"><?php echo htmlspecialchars($row[1]); ?></p>
                </div>
                                  <a href="?action=RequestEstimate&message=<?= urlencode('I\'m interested in '). htmlspecialchars($row[1]); ?>" aria-label=""
                      class=" inline-flex items-center font-semibold text-blue-700 hover:text-blue-900">Learn
                      more
                  </a>
            </div>
        </div>
            <?php } ?>
      <?php endif; ?>
    </div>
</section>




<!-- Testimonials -->
<section class="text-black body-font"> 
  <div class="container px-5 py-24 mx-auto">
    <h1 class="text-3xl font-medium title-font text-[#534B6F] mb-12 text-center">Testimonials</h1>
    <div class="flex flex-wrap -m-4">
    <?php if (isset($data['error'])) : ?>
        <div class="p-4 md:w-1/2 w-full text-[#534B6F]">
        <div class="h-full bg-[#f8f0eb] p-8 rounded-xl border-2 border-[#d4cac3]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="black" class="block w-5 h-5 text-[#534B6F] mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6"><?php echo htmlspecialchars($data['error']); ?></p>
          <a class="inline-flex items-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-[#534B6F]"></span>
            </span>
          </a>
        </div>
      </div>
    <?php else : ?>
      <?php foreach($data['Testimonials'] as $row){ ?>
        <div class="p-4 md:w-1/2 w-full text-[#534B6F]">
          <div class="h-full bg-[#f8f0eb] p-8 rounded-xl border-2 border-[#d4cac3]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="black" class="block w-5 h-5 text-[#534B6F] mb-4" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed mb-6"><?php echo htmlspecialchars($row[1]); ?></p>
            <a class="inline-flex items-center">
              <span class="flex-grow flex flex-col pl-4">
                <span class="title-font font-medium text-[#534B6F]">- <?php echo htmlspecialchars($row[0]); ?></span>
              </span>
            </a>
          </div>
        </div>
      <?php } ?>
    <?php endif; ?>
    </div>
  </div>
</section>
</section>





<?php include('Views/_partials/footer.php'); ?>
