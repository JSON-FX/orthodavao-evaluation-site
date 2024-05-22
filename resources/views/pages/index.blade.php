@extends('layouts.app')

@section('content')
  {{-- header --}}
  <x-header></x-header>

  {{-- hero section --}}
  <section>
    <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 sm:py-32 lg:px-8 shadow-xl">
      <img
        src="{{ asset('images/image-12.jpg') }}"
        alt=""
        class="absolute inset-0 -z-10 h-full w-full object-cover filter blur-md opacity-50"
      />

      <div
        class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
        aria-hidden="true"
      ></div>
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
          Excellence in Orthopaedics
        </h2>
        <p class="mt-6 text-xl leading-6 text-gray-300">
          We are an Orthopaedics referral center that specializes in treating disorders related to
          bones, joints, and the musculoskeletal system in children and adults. Our center is
          equipped with state-of-the-art facilities and staffed with a team of highly knowledgeable
          and experienced specialists who are dedicated to providing you with exceptional care.
        </p>
      </div>
    </div>
  </section>

  {{-- history section --}}
  <section>
    <div class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
      <div
        class="absolute -top-80 left-[max(6rem,33%)] -z-10 transform-gpu blur-3xl sm:left-1/2 md:top-20 lg:ml-20 xl:top-3 xl:ml-56"
        aria-hidden="true"
      >
        <div
          class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
          style="
            clip-path: polygon(
              63.1% 29.6%,
              100% 17.2%,
              76.7% 3.1%,
              48.4% 0.1%,
              44.6% 4.8%,
              54.5% 25.4%,
              59.8% 49.1%,
              55.3% 57.9%,
              44.5% 57.3%,
              27.8% 48%,
              35.1% 81.6%,
              0% 97.8%,
              39.3% 100%,
              35.3% 81.5%,
              97.2% 52.8%,
              63.1% 29.6%
            );
          "
        ></div>
      </div>
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          {{--
            <p class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">
            Deploy faster
            </p>
          --}}
          <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">History</h1>
          <p class="mt-6 text-gray-700">
            On June 21, 1969, Republic Act 5702 was passed with the efforts of Senator Alejandro D.
            Almendras and Congressman Lorenzo P. Sarmiento, with the aim of establishing a National
            Hospital in the Municipality of Magugpo (now Tagum City) in the Province of Davao. The
            hospital was officially organized in 1972, with a sanctioned capacity of 50 beds and
            providing outpatient services at Toribio Building in Poblacion, Tagum. It opened its
            doors to the public on January 26, 1974, offering tertiary level care to the local area
            and nearby provinces. In April 1980, Administrative Order No. 82, issued by the Ministry
            of Health, changed the hospital's name to Davao Regional Hospital (DRH) and reclassified
            it as a regional hospital with a 100-bed capacity. In 1992, the hospital expanded its
            bed capacity to 150. It was also during this time that Dr. Romulo Busuego was appointed
            as the first Fellow employee of the Philippine College of Surgery (PCS), which led to
            the establishment of DRH's Department of Surgery. The Department of Surgery Residency
            Training program was formally established, with Dr. Francisco Manzanarez as the first
            chairperson and Dr. Alex Tan as the first Training Officer. Associate members of the
            department included Drs. Leopoldo Vega, Jose S. Bacaltos, Herman Hernandez, Kian Wong,
            and Sergio Dalisay. In 2000, the Mindanao Integrated Surgical Residency Training Program
            was created in partnership with Southern Philippines Medical Center (SPMC), formerly
            known as Davao Medical Center (DMC).
          </p>
        </div>
        <div
          class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:mt-10 lg:max-w-none lg:grid-cols-12"
        >
          <div class="relative lg:order-last lg:col-span-5">
            <svg
              class="absolute -top-[40rem] left-1 -z-10 h-[64rem] w-[175.5rem] -translate-x-1/2 stroke-gray-900/10 [mask-image:radial-gradient(64rem_64rem_at_111.5rem_0%,white,transparent)]"
              aria-hidden="true"
            >
              <defs>
                <pattern
                  id="e87443c8-56e4-4c20-9111-55b82fa704e3"
                  width="200"
                  height="200"
                  patternUnits="userSpaceOnUse"
                >
                  <path d="M0.5 0V200M200 0.5L0 0.499983" />
                </pattern>
              </defs>
              <rect
                width="100%"
                height="100%"
                stroke-width="0"
                fill="url(#e87443c8-56e4-4c20-9111-55b82fa704e3)"
              />
            </svg>
            {{--
              <figure class="border-l border-indigo-600 pl-8">
              <blockquote class="text-xl font-semibold leading-8 tracking-tight text-gray-900">
              <p>
              “Vel ultricies morbi odio facilisi ultrices accumsan donec lacus purus. Lectus
              nibh ullamcorper ac dictum justo in euismod. Risus aenean ut elit massa. In amet
              aliquet eget cras. Sem volutpat enim tristique.”
              </p>
              </blockquote>
              <figcaption class="mt-8 flex gap-x-4">
              <img
              src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
              alt=""
              class="mt-1 h-10 w-10 flex-none rounded-full bg-gray-50"
              />
              <div class="text-sm leading-6">
              <div class="font-semibold text-gray-900">Brenna Goyette</div>
              <div class="text-gray-600">@brenna</div>
              </div>
              </figcaption>
              </figure>
            --}}
          </div>
          <div class="max-w-xl text-base leading-7 text-gray-700 lg:col-span-7">
            <p>
              On August 1, 2001, DRH acquired a license to operate with a capacity of 200 beds. Then
              on August 26, 2015, Davao Regional Hospital was renamed Davao Regional Medical Center
              (DRMC) due to Republic Act 10678 signed by President Benigno S. Aquino III. This act
              increased the bed capacity from 300 to 600. In 2012, the Section of Orthopedics was
              established and led by Dr. Sergio Dalisay, alongside Drs. Jeremiah Morales and Dan
              Bagarra as staff members. When Dr. Dalisay retired in March 2022, Dr. Jeremiah Morales
              was appointed as the new Head of the Section of Orthopaedics. During this time, the
              Department of Health issued Department Order 2021-0001, designating DRMC as a
              Specialty Center for 13 clinical specialties under the Philippine Health Facility
              Development Plan of Republic Act No. 11223, also known as the Universal Health Care
              Act of 2019. As a result, Orthopedic and Brain and Spine Centers were established at
              DRMC, leading to the idea of creating a Residency Training program in Orthopedics.
              Efforts were made to complete the orthopedic consultant staff with various
              subspecialties, as well as the recruitment of resident physicians dedicated to
              orthopedic care. Temporary arrangements were made for the Department of Surgery to
              oversee specific orthopedic areas until the department became fully operational.
              President Rodrigo Roa Duterte signed Republic Act 11819 on June 29, 2023, which has
              increased the bed capacity of DRMC to 1000 beds. In June 2023, the Section of
              Orthopedics officially separated from the Department of Surgery, and Drs. Dan Bagarra
              and Alfred Villarico were appointed as the Department Chair and Training Officer,
              respectively. The department now consists of various consultant subspecialists,
              including Trauma, Spine, Hip & Knee, Hip Preservation, Hand & Microvascular, Elbow and
              Shoulder, Sports Medicine and Arthroscopic Surgery, Pediatrics, and Foot and Ankle.
              Additionally, the department has hired 5 in-training residents to complete its staff.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- mission and vision --}}
  <section>
    <div class="bg-white">
      <main>
        <div class="relative isolate">
          <svg
            class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-gray-200 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]"
            aria-hidden="true"
          >
            <defs>
              <pattern
                id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84"
                width="200"
                height="200"
                x="50%"
                y="-1"
                patternUnits="userSpaceOnUse"
              >
                <path d="M.5 200V.5H200" fill="none" />
              </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
              <path
                d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                stroke-width="0"
              />
            </svg>
            <rect
              width="100%"
              height="100%"
              stroke-width="0"
              fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)"
            />
          </svg>
          <div
            class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48"
            aria-hidden="true"
          >
            <div
              class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
              style="
                clip-path: polygon(
                  63.1% 29.5%,
                  100% 17.1%,
                  76.6% 3%,
                  48.4% 0%,
                  44.6% 4.7%,
                  54.5% 25.3%,
                  59.8% 49%,
                  55.2% 57.8%,
                  44.4% 57.2%,
                  27.8% 47.9%,
                  35.1% 81.5%,
                  0% 97.7%,
                  39.2% 100%,
                  35.2% 81.4%,
                  97.2% 52.8%,
                  63.1% 29.5%
                );
              "
            ></div>
          </div>
          <div class="overflow-hidden">
            <div class="mx-auto max-w-7xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32">
              <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                <div class="relative w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                  <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                    Mission and Vision
                  </h1>
                  <p class="mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">
                    The DRMC Department of Orthopaedics is committed to delivering top-notch
                    orthopaedic care, education, and research while maintaining the highest
                    standards of quality.
                  </p>
                  <p class="mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">
                    The DRMC Department of Orthopaedics aims to be a leading and independent
                    provider of orthopaedic services and training in the Davao Region and beyond.
                    Our goal is to establish ourselves as the top orthopaedic center that can cater
                    to the diverse specialty needs of our patients, referring providers, and health
                    system partners.
                  </p>
                </div>
                <div
                  class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0"
                >
                  <div
                    class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80"
                  >
                    <div class="relative">
                      <img
                        src="{{ asset('images/image-2.jpg') }}"
                        alt=""
                        class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg"
                      />
                      <div
                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                      ></div>
                    </div>
                  </div>
                  <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
                    <div class="relative">
                      <img
                        src="{{ asset('images/image-3.jpg') }}"
                        alt=""
                        class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg"
                      />
                      <div
                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                      ></div>
                    </div>
                    <div class="relative">
                      <img
                        src="{{ asset('images/image-6.jpg') }}"
                        alt=""
                        class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg"
                      />
                      <div
                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                      ></div>
                    </div>
                  </div>
                  <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
                    <div class="relative">
                      <img
                        src="{{ asset('images/image-9.jpg') }}"
                        alt=""
                        class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg"
                      />
                      <div
                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                      ></div>
                    </div>
                    <div class="relative">
                      <img
                        src="{{ asset('images/image-8.jpg') }}"
                        alt=""
                        class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg"
                      />
                      <div
                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </section>
@endsection
