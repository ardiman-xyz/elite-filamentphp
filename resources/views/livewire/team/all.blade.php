<div>
    <div class="verflow-hidden bg-primary pt-[100px] pb-[80px] md:pt-[100px] lg:pt-[110px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4">
                    <div class="text-center">
                        <h1 class="text-4xl font-semibold text-white">Team kami</h1>
                    </div>
                </div>
            </div>
        </div>
        <div>
        <span class="absolute top-0 left-0 z-[-1]">
          <svg
              width="495"
              height="470"
              viewBox="0 0 495 470"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
          >
            <circle
                cx="55"
                cy="442"
                r="138"
                stroke="white"
                stroke-opacity="0.04"
                stroke-width="50"
            />
            <circle
                cx="446"
                r="39"
                stroke="white"
                stroke-opacity="0.04"
                stroke-width="20"
            />
            <path
                d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z"
                stroke="white"
                stroke-opacity="0.08"
                stroke-width="12"
            />
          </svg>
        </span>
            <span class="absolute top-0 right-0 z-[-1]">
          <svg
              width="493"
              height="470"
              viewBox="0 0 493 470"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
          >
            <circle
                cx="462"
                cy="5"
                r="138"
                stroke="white"
                stroke-opacity="0.04"
                stroke-width="50"
            />
            <circle
                cx="49"
                cy="470"
                r="39"
                stroke="white"
                stroke-opacity="0.04"
                stroke-width="20"
            />
            <path
                d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z"
                stroke="white"
                stroke-opacity="0.06"
                stroke-width="13"
            />
          </svg>
        </span>
        </div>
    </div>
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">

        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
               @foreach($teams as $team)
                    <div class="w-full px-4 md:w-1/2 xl:w-1/4">
                        <div class="mx-auto mb-10 w-full max-w-[370px]">
                            <div class="relative overflow-hidden rounded-lg">
                                <img
                                    src="{{ asset('storage/'. $team->photo) }}"
                                    alt="image"
                                    class="w-full"
                                />
                                <div class="absolute bottom-5 left-0 w-full text-center">
                                    <div
                                        class="relative mx-5 overflow-hidden rounded-lg bg-white py-5 px-3"
                                    >
                                        <h3 class="text-base font-semibold text-dark">
                                            {{ $team->name }}
                                        </h3>
                                        <p class="text-sm text-body-color">{{ $team->position }}</p>
                                        <div>
                      <span class="absolute left-0 bottom-0">
                        <svg
                            width="61"
                            height="30"
                            viewBox="0 0 61 30"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                          <circle
                              cx="16"
                              cy="45"
                              r="45"
                              fill="#13C296"
                              fill-opacity="0.11"
                          />
                        </svg>
                      </span>
                                            <span class="absolute top-0 right-0">
                        <svg
                            width="20"
                            height="25"
                            viewBox="0 0 20 25"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                          <circle
                              cx="0.706257"
                              cy="24.3533"
                              r="0.646687"
                              transform="rotate(-90 0.706257 24.3533)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="6.39669"
                              cy="24.3533"
                              r="0.646687"
                              transform="rotate(-90 6.39669 24.3533)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="12.0881"
                              cy="24.3533"
                              r="0.646687"
                              transform="rotate(-90 12.0881 24.3533)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="17.7785"
                              cy="24.3533"
                              r="0.646687"
                              transform="rotate(-90 17.7785 24.3533)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="0.706257"
                              cy="18.6624"
                              r="0.646687"
                              transform="rotate(-90 0.706257 18.6624)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="6.39669"
                              cy="18.6624"
                              r="0.646687"
                              transform="rotate(-90 6.39669 18.6624)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="12.0881"
                              cy="18.6624"
                              r="0.646687"
                              transform="rotate(-90 12.0881 18.6624)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="17.7785"
                              cy="18.6624"
                              r="0.646687"
                              transform="rotate(-90 17.7785 18.6624)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="0.706257"
                              cy="12.9717"
                              r="0.646687"
                              transform="rotate(-90 0.706257 12.9717)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="6.39669"
                              cy="12.9717"
                              r="0.646687"
                              transform="rotate(-90 6.39669 12.9717)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="12.0881"
                              cy="12.9717"
                              r="0.646687"
                              transform="rotate(-90 12.0881 12.9717)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="17.7785"
                              cy="12.9717"
                              r="0.646687"
                              transform="rotate(-90 17.7785 12.9717)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="0.706257"
                              cy="7.28077"
                              r="0.646687"
                              transform="rotate(-90 0.706257 7.28077)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="6.39669"
                              cy="7.28077"
                              r="0.646687"
                              transform="rotate(-90 6.39669 7.28077)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="12.0881"
                              cy="7.28077"
                              r="0.646687"
                              transform="rotate(-90 12.0881 7.28077)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="17.7785"
                              cy="7.28077"
                              r="0.646687"
                              transform="rotate(-90 17.7785 7.28077)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="0.706257"
                              cy="1.58989"
                              r="0.646687"
                              transform="rotate(-90 0.706257 1.58989)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="6.39669"
                              cy="1.58989"
                              r="0.646687"
                              transform="rotate(-90 6.39669 1.58989)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="12.0881"
                              cy="1.58989"
                              r="0.646687"
                              transform="rotate(-90 12.0881 1.58989)"
                              fill="#3056D3"
                          />
                          <circle
                              cx="17.7785"
                              cy="1.58989"
                              r="0.646687"
                              transform="rotate(-90 17.7785 1.58989)"
                              fill="#3056D3"
                          />
                        </svg>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               @endforeach
            </div>
        </div>
    </section>
</div>
