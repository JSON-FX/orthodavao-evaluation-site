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
        class="absolute inset-0 -z-10 h-full w-full object-cover filter blur-md opacity-70"
      />

      <div
        class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
        aria-hidden="true"
      ></div>
      <div class="mx-auto max-w-4xl text-center">
        <h1 class="text-6xl font-bold tracking-tight text-white sm:text-8xl">
          Excellence in Orthopaedics
        </h1>
        <p class="mt-6 text-3xl leading-6 text-gray-300">
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
        <div class="mx-auto max-w-6xl lg:mx-0">
          {{--
            <p class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">
            Deploy faster
            </p>
          --}}
          <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">History</h1>
          <p class="mt-6 text-xl text-gray-700">
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

          <p class="mt-5 text-xl text-gray-700">
            On August 1, 2001, DRH acquired a license to operate with a capacity of 200 beds. Then
            on August 26, 2015, Davao Regional Hospital was renamed Davao Regional Medical Center
            (DRMC) due to Republic Act 10678 signed by President Benigno S. Aquino III. This act
            increased the bed capacity from 300 to 600. In 2012, the Section of Orthopedics was
            established and led by Dr. Sergio Dalisay, alongside Drs. Jeremiah Morales and Dan
            Bagarra as staff members. When Dr. Dalisay retired in March 2022, Dr. Jeremiah Morales
            was appointed as the new Head of the Section of Orthopaedics. During this time, the
            Department of Health issued Department Order 2021-0001, designating DRMC as a Specialty
            Center for 13 clinical specialties under the Philippine Health Facility Development Plan
            of Republic Act No. 11223, also known as the Universal Health Care Act of 2019. As a
            result, Orthopedic and Brain and Spine Centers were established at DRMC, leading to the
            idea of creating a Residency Training program in Orthopedics. Efforts were made to
            complete the orthopedic consultant staff with various subspecialties, as well as the
            recruitment of resident physicians dedicated to orthopedic care. Temporary arrangements
            were made for the Department of Surgery to oversee specific orthopedic areas until the
            department became fully operational. President Rodrigo Roa Duterte signed Republic Act
            11819 on June 29, 2023, which has increased the bed capacity of DRMC to 1000 beds. In
            June 2023, the Section of Orthopedics officially separated from the Department of
            Surgery, and Drs. Dan Bagarra and Alfred Villarico were appointed as the Department
            Chair and Training Officer, respectively. The department now consists of various
            consultant subspecialists, including Trauma, Spine, Hip & Knee, Hip Preservation, Hand &
            Microvascular, Elbow and Shoulder, Sports Medicine and Arthroscopic Surgery, Pediatrics,
            and Foot and Ankle. Additionally, the department has hired 5 in-training residents to
            complete its staff.
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
  {{-- core values --}}
  <section>
    <div class="overflow-hidden bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
          class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2"
        >
          <div class="lg:ml-auto lg:pl-4 lg:pt-4">
            <div class="lg:max-w-lg">
              <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Core Values
              </p>
              <p class="mt-6 text-lg leading-8 text-gray-600"></p>
              <p class="mt-6 text-lg leading-8 text-gray-600">
                DRMC-ORTHO is guided by its core values of Determination, Respect, Motivation,
                Compassion, Honesty, responsibility, and transparency.
              </p>
              <dl class="mt-10 max-w-xl text-base text-gray-600 lg:max-w-none">
                <div class="relative pl-9">
                  <dt class="inline font-semibold text-xl text-gray-900">D -</dt>
                  <dd class="inline">Determination</dd>
                </div>
                <div class="relative pl-9">
                  <dt class="inline font-semibold text-xl text-gray-900">R -</dt>
                  <dd class="inline">Respect</dd>
                </div>
                <div class="relative pl-9">
                  <dt class="inline font-semibold text-xl text-gray-900">M -</dt>
                  <dd class="inline">Motivation</dd>
                </div>
                <div class="relative pl-9">
                  <dt class="inline font-semibold text-xl text-gray-900">C -</dt>
                  <dd class="inline">Compassionate</dd>
                </div>
                <div class="relative pl-9 mt-5">
                  <dt class="inline font-semibold text-xl text-gray-900">O -</dt>
                  <dd class="inline">Outstanding</dd>
                </div>
                <div class="relative pl-9">
                  <dt class="inline font-semibold text-xl text-gray-900">R -</dt>
                  <dd class="inline">Responsibility</dd>
                </div>
                <div class="relative pl-9">
                  <dt class="inline font-semibold text-xl text-gray-900">H -</dt>
                  <dd class="inline">Honesty</dd>
                </div>
                <div class="relative pl-9">
                  <dt class="inline font-semibold text-xl text-gray-900">O -</dt>
                  <dd class="inline">Optimism</dd>
                </div>
              </dl>
            </div>
          </div>
          <div class="flex items-start justify-end lg:order-first">
            <img
              src="{{ asset('images/image-10.jpg') }}"
              alt="Product screenshot"
              class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
              width="2432"
              height="1442"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- clinical services --}}
  <section>
    <div class="bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
          <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-6xl">
            Clinical Services
          </h1>
          <p class="mt-6 text-lg leading-8 text-gray-600">
            We offer a wide range of clinical services, including consultations with expert
            physicians, diagnostic tests, and treatment plans tailored to each individual's needs.
          </p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
          <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
            <div class="flex flex-col">
              <dt class="flex items-center gap-x-3 text-lg font-semibold leading-7 text-gray-900">
                General Orthopaedics
              </dt>
              <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                <p class="flex-auto text-lg">Daily- 8:00 AM- 4:00 PM Daily</p>
              </dd>
            </div>
            <div class="flex flex-col">
              <dt class="flex items-center gap-x-3 text-lg font-semibold leading-7 text-gray-900">
                Hand & Microvascular Clinic
              </dt>
              <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                <p class="flex-auto text-lg">Monday- 1:00 PM- 3:00 PM</p>
              </dd>
            </div>
            <div class="flex flex-col">
              <dt class="flex items-center gap-x-3 text-lg font-semibold leading-7 text-gray-900">
                Paediatric Orthopaedic (CLUBFOOT CLINIC)
              </dt>
              <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                <p class="flex-auto text-lg">Tuesday- 1:00 PM- 3:00 PM</p>
              </dd>
            </div>
            <div class="flex flex-col">
              <dt class="flex items-center gap-x-3 text-lg font-semibold leading-7 text-gray-900">
                Spine Clinic
              </dt>
              <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                <p class="flex-auto text-lg">Wednesday- 1:00 PM- 3:00 PM</p>
              </dd>
            </div>
            <div class="flex flex-col">
              <dt class="flex items-center gap-x-3 text-lg font-semibold leading-7 text-gray-900">
                5. Foot & Ankle Clinic Hip & Knee Clinic
              </dt>
              <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                <p class="flex-auto text-lg">Thursday- 1:00 PM- 3:00 PM</p>
              </dd>
            </div>
            <div class="flex flex-col">
              <dt class="flex items-center gap-x-3 text-lg font-semibold leading-7 text-gray-900">
                Sports Medicine Elbow & Shoulder Surgery Orthopaedic Oncology
              </dt>
              <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                <p class="flex-auto text-lg">Friday- 1:00 PM- 3:00 PM</p>
              </dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </section>
  {{-- training program --}}
  <section>
    <div class="bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
          class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3"
        >
          <div>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
              Residency Training Program
            </p>
            <p class="mt-6 text-base leading-7 text-gray-600">
              Requirements for admission into the residency training program
            </p>
          </div>
          <dl
            class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:gap-y-16"
          >
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                Degree of Doctor of Medicine from an accredited college or university
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                Certificate of Completion of the Internship Program from an accredited hospital
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                Passed the Physicians' Licensure Examination conducted by the Board of Medicine of
                the Professional Regulation Commission
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                Comply with DRMC PETU requirements
              </dt>
            </div>
          </dl>
          <p class="mt-6 text-base leading-7 text-gray-600 font-bold">
            Only applicants with the following characteristics shall be considered for admission
          </p>
          <dl
            class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:gap-y-16"
          >
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                Filipino citizen
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                With good moral character
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                In good physical health
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                With the personality and attitudes considered suitable for a career in health
              </dt>
            </div>
          </dl>
        </div>
        <p class="mt-10 text-base leading-7 text-gray-600">
          The residency program starts on January 1 and July 1 (Midyear). An accepted applicant who
          fails to start his residency forfeits his slot in the program.
        </p>
        <p class="mt-6 text-base leading-7 text-gray-600">
          The training Committee of the department reserves the right to refuse admission to any
          applicant.
        </p>
        <p class="mt-6 text-base leading-7 text-gray-600">
          Pre-Residency Screening Program or adjunctship starts on October 1 for January applicants
          and April 1 for July applicants. It will be a 1 month program with the applicant rotating
          to all major trauma services of the department.
        </p>
      </div>
    </div>
  </section>
  {{-- application procedure --}}
  <section>
    <div class="bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
          class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3"
        >
          <div>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
              Application Process
            </p>
            <p class="mt-6 text-base leading-7 text-gray-600">
              The Applicant secures an application from the office of the department
            </p>
            <p class="mt-6 text-base leading-7 text-gray-600">
              The completed form is submitted to the same office together with following required
              documents
            </p>
          </div>
          <dl
            class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:gap-y-16"
          >
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                1 passport-sized pictures
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                2 photocopies of Medical Transcript of Records
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                2 photocopies of Medical Diploma
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                2 copies of certificates of class rank and General Weighted Average if applicable
                from the Office of the Dean of Medical School
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                2 photocopies of Certificate of Internship
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                2 photocopies of Neuropsychiatric Test from DOH-accredited testing centers
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                2 Letters of Recommendation (from previous employer if applicable)
              </dt>
            </div>
            <div class="relative pl-9">
              <dt class="font-semibold text-gray-900">
                <svg
                  class="absolute left-0 top-1 h-5 w-5 text-indigo-500"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                    clip-rule="evenodd"
                  />
                </svg>
                2 letters of Good Moral Character from office of the Dean of Medical School
              </dt>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </section>

  {{-- contact --}}
  <section>
    <div class="bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl space-y-16 divide-y divide-gray-100 lg:mx-0 lg:max-w-none">
          <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3">
            <div>
              <h2 class="text-3xl font-bold tracking-tight text-gray-900">Get in touch</h2>
              <p class="mt-4 leading-7 text-gray-600">Contact us through the following details</p>
            </div>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">
              <div class="rounded-2xl bg-gray-50 p-10">
                <h3 class="text-base font-semibold leading-7 text-gray-900">
                  Department of Orthopaedics Apokon Road, 8100 Tagum City, Davao del Norte,
                  PHILIPPINES
                </h3>
                <dl class="mt-3 space-y-1 text-sm leading-6 text-gray-600">
                  <div>
                    <dt class="sr-only">Email</dt>
                    <dd>
                      <a
                        class="font-semibold text-indigo-600"
                        href="mailto:drmc.orthopaedics@gmail.com"
                      >
                        drmc.orthopaedics@gmail.com
                      </a>
                    </dd>
                  </div>
                  <div class="mt-1">
                    <dt class="sr-only">Telephone number</dt>
                    <p>Telephone number</p>
                    <dd>(084) 829 7120 local 861</dd>
                  </div>
                </dl>
              </div>
              <div class="rounded-2xl bg-gray-50 p-10">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Telefax</h3>
                <dl class="mt-3 space-y-1 text-sm leading-6 text-gray-600">
                  <div class="mt-1">
                    <dt class="sr-only">Phone number</dt>
                    <dd>(084) 216 9148</dd>
                    <p>Website</p>
                    <a
                      class="font-semibold text-indigo-600"
                      href="https://www.drmcorthopaedics.com"
                    >
                      https://www.drmcorthopaedics.com
                    </a>
                  </div>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
