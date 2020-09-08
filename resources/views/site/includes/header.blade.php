<header class="header">

    <div class="header--content">

        @if($setting && $setting['logo'])
            <div class="logo">
                <a href="{{ url('/') }}" class="logo--content">
                    {{-- <img class="logo--img" src="{{ URL::asset('storage/' . $setting['logo']) }}" alt="{{ $setting['name_site'] }}" title="{{ $setting['name_site'] }}" /> --}}
                    <svg height="75" viewBox="0 0 628 190" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M57.216 189c-.475 0-.889-.176-1.24-.527a1.697 1.697 0 01-.527-1.24v-19.096c0-.475.176-.889.527-1.24a1.698 1.698 0 011.24-.527h.775a2.72 2.72 0 011.488.434c.455.289.785.672.992 1.147l5.425 11.718c0 .021.01.031.031.031.02 0 .031-.01.031-.031l5.425-11.718c.207-.475.537-.858.992-1.147a2.72 2.72 0 011.488-.434h.899c.475 0 .889.176 1.24.527.351.351.527.765.527 1.24v19.096c0 .475-.176.889-.527 1.24a1.698 1.698 0 01-1.24.527h-.682c-.475 0-.889-.176-1.24-.527a1.697 1.697 0 01-.527-1.24v-13.485c0-.021-.01-.031-.031-.031-.02 0-.031.01-.031.031l-3.72 7.967a2.879 2.879 0 01-1.054 1.178 2.67 2.67 0 01-1.457.434h-.186a2.824 2.824 0 01-1.488-.434 2.951 2.951 0 01-1.023-1.178l-3.72-7.967c0-.021-.01-.031-.031-.031-.02 0-.031.01-.031.031v13.485c0 .475-.176.889-.527 1.24a1.698 1.698 0 01-1.24.527h-.558zm31.989-18.786l-2.728 9.734a.205.205 0 00.03.186c.042.062.094.093.156.093h5.146c.062 0 .113-.031.155-.093a.205.205 0 00.03-.186l-2.727-9.734c0-.021-.01-.031-.031-.031-.021 0-.031.01-.031.031zM81.175 189c-.433 0-.774-.176-1.022-.527a1.198 1.198 0 01-.155-1.147l6.417-19.282c.186-.496.485-.899.899-1.209a2.4 2.4 0 011.426-.465h1.116c.537 0 1.012.155 1.426.465.434.31.733.713.899 1.209l6.417 19.282c.144.413.093.796-.155 1.147a1.186 1.186 0 01-1.023.527h-1.116c-.496 0-.961-.155-1.395-.465a2.428 2.428 0 01-.837-1.24l-.992-3.503c-.021-.165-.135-.248-.341-.248h-7.006c-.186 0-.3.083-.341.248l-.992 3.503c-.124.496-.403.909-.837 1.24-.414.31-.879.465-1.395.465h-.992zm18.073-19.034c-.476 0-.889-.165-1.24-.496a1.697 1.697 0 01-.527-1.24v-.093c0-.475.175-.889.527-1.24a1.698 1.698 0 011.24-.527h13.206a1.7 1.7 0 011.24.527c.351.351.527.765.527 1.24v.093c0 .475-.176.889-.527 1.24a1.75 1.75 0 01-1.24.496H108.3c-.166 0-.248.093-.248.279v16.988c0 .475-.176.889-.527 1.24a1.7 1.7 0 01-1.24.527h-.868c-.476 0-.889-.176-1.24-.527a1.694 1.694 0 01-.527-1.24v-16.988c0-.186-.083-.279-.248-.279h-4.154zM120.124 189a1.7 1.7 0 01-1.24-.527 1.698 1.698 0 01-.527-1.24v-19.096c0-.475.176-.889.527-1.24a1.7 1.7 0 011.24-.527h10.54c.476 0 .889.176 1.24.527.352.351.527.765.527 1.24s-.175.889-.527 1.24a1.747 1.747 0 01-1.24.496h-7.688c-.186 0-.279.093-.279.279v4.991c0 .186.093.279.279.279h7.161c.476 0 .868.165 1.178.496.331.331.496.723.496 1.178 0 .455-.165.847-.496 1.178-.31.31-.702.465-1.178.465h-7.161c-.186 0-.279.093-.279.279v6.2c0 .186.093.279.279.279h7.688c.476 0 .889.176 1.24.527.352.331.527.734.527 1.209 0 .475-.175.889-.527 1.24a1.696 1.696 0 01-1.24.527h-10.54zm21.16-19.096v6.727c0 .165.093.248.279.248h1.55c3.678 0 5.518-1.312 5.518-3.937 0-2.335-1.705-3.503-5.115-3.503-.62 0-1.271.052-1.953.155-.186.041-.279.145-.279.31zM138.773 189c-.476 0-.889-.176-1.24-.527a1.694 1.694 0 01-.527-1.24v-18.941c0-.496.165-.94.496-1.333.33-.393.744-.61 1.24-.651a54.39 54.39 0 015.084-.248c3.038 0 5.311.568 6.82 1.705 1.508 1.116 2.263 2.697 2.263 4.743 0 1.467-.403 2.759-1.209 3.875-.786 1.116-1.85 1.901-3.193 2.356-.021 0-.031.01-.031.031 0 .041.01.062.031.062.992.62 1.839 1.839 2.542 3.658l1.86 4.867c.144.393.093.765-.155 1.116a1.084 1.084 0 01-.961.527h-.961a2.57 2.57 0 01-1.457-.434 2.56 2.56 0 01-.93-1.209l-1.736-4.774c-.372-.992-.796-1.643-1.271-1.953-.476-.31-1.292-.465-2.449-.465h-1.426c-.186 0-.279.093-.279.279v6.789c0 .475-.176.889-.527 1.24a1.6 1.6 0 01-1.209.527h-.775zm20.267 0c-.475 0-.889-.176-1.24-.527a1.698 1.698 0 01-.527-1.24v-19.096c0-.475.176-.889.527-1.24a1.698 1.698 0 011.24-.527h1.24c.475 0 .889.176 1.24.527.351.351.527.765.527 1.24v19.096c0 .475-.176.889-.527 1.24a1.698 1.698 0 01-1.24.527h-1.24zm16.293-18.786l-2.728 9.734a.202.202 0 00.031.186c.041.062.093.093.155.093h5.146c.062 0 .113-.031.155-.093a.208.208 0 00.031-.186l-2.728-9.734c0-.021-.011-.031-.031-.031-.021 0-.031.01-.031.031zM167.304 189c-.434 0-.775-.176-1.023-.527a1.197 1.197 0 01-.155-1.147l6.417-19.282c.186-.496.485-.899.899-1.209a2.4 2.4 0 011.426-.465h1.116c.537 0 1.012.155 1.426.465.434.31.733.713.899 1.209l6.417 19.282a1.2 1.2 0 01-.155 1.147 1.186 1.186 0 01-1.023.527h-1.116c-.496 0-.961-.155-1.395-.465a2.42 2.42 0 01-.837-1.24l-.992-3.503c-.021-.165-.135-.248-.341-.248h-7.006c-.186 0-.3.083-.341.248l-.992 3.503c-.124.496-.403.909-.837 1.24a2.27 2.27 0 01-1.395.465h-.992zm22.887 0a1.7 1.7 0 01-1.24-.527 1.698 1.698 0 01-.527-1.24v-19.096c0-.475.176-.889.527-1.24a1.7 1.7 0 011.24-.527h1.24c.476 0 .889.176 1.24.527.352.351.527.765.527 1.24v19.096c0 .475-.175.889-.527 1.24a1.696 1.696 0 01-1.24.527h-1.24zm14.774-9.548c-2.48-.827-4.278-1.829-5.394-3.007-1.095-1.178-1.643-2.604-1.643-4.278 0-1.881.63-3.369 1.891-4.464 1.261-1.095 3.028-1.643 5.301-1.643 1.922 0 3.596.217 5.022.651.496.145.889.444 1.178.899.31.434.465.92.465 1.457v.279c0 .393-.176.703-.527.93a1.187 1.187 0 01-1.085.093 13.057 13.057 0 00-4.743-.899c-1.033 0-1.819.238-2.356.713-.537.475-.806 1.137-.806 1.984 0 1.488.971 2.552 2.914 3.193 2.79.889 4.722 1.901 5.797 3.038 1.095 1.137 1.643 2.604 1.643 4.402 0 4.34-2.676 6.51-8.029 6.51-1.674 0-3.193-.258-4.557-.775a2.334 2.334 0 01-1.178-.961 2.927 2.927 0 01-.403-1.519v-.372c0-.393.165-.672.496-.837a1.06 1.06 0 011.023-.031 9.51 9.51 0 004.309 1.023c2.625 0 3.937-.992 3.937-2.976 0-.806-.248-1.467-.744-1.984-.496-.537-1.333-1.013-2.511-1.426zM227.322 189a1.7 1.7 0 01-1.24-.527 1.698 1.698 0 01-.527-1.24v-19.096c0-.475.176-.889.527-1.24a1.7 1.7 0 011.24-.527h10.54c.476 0 .889.176 1.24.527.352.351.527.765.527 1.24s-.175.889-.527 1.24a1.747 1.747 0 01-1.24.496h-7.688c-.186 0-.279.093-.279.279v4.991c0 .186.093.279.279.279h7.161c.476 0 .868.165 1.178.496.331.331.496.723.496 1.178 0 .455-.165.847-.496 1.178-.31.31-.702.465-1.178.465h-7.161c-.186 0-.279.093-.279.279v6.2c0 .186.093.279.279.279h7.688c.476 0 .889.176 1.24.527.352.331.527.734.527 1.209 0 .475-.175.889-.527 1.24a1.696 1.696 0 01-1.24.527h-10.54zm18.618 0c-.475 0-.889-.176-1.24-.527a1.749 1.749 0 01-.496-1.24v-19.096c0-.475.165-.889.496-1.24a1.698 1.698 0 011.24-.527h.992c.475 0 .889.176 1.24.527.351.351.527.765.527 1.24v16.988c0 .186.083.279.248.279h7.967a1.6 1.6 0 011.209.527 1.6 1.6 0 01.527 1.209v.093c0 .475-.176.889-.527 1.24a1.6 1.6 0 01-1.209.527H245.94zm25.099-29.853h1.643c.351 0 .589.155.713.465.144.31.103.589-.124.837l-2.418 2.759c-.765.868-1.736 1.302-2.914 1.302h-.217c-.393 0-.682-.165-.868-.496-.186-.331-.176-.661.031-.992l1.488-2.387c.599-.992 1.488-1.488 2.666-1.488zM264.529 189c-.476 0-.889-.176-1.24-.527a1.694 1.694 0 01-.527-1.24v-19.096c0-.475.175-.889.527-1.24a1.696 1.696 0 011.24-.527h10.54a1.7 1.7 0 011.24.527c.351.351.527.765.527 1.24s-.176.889-.527 1.24a1.75 1.75 0 01-1.24.496h-7.688c-.186 0-.279.093-.279.279v4.991c0 .186.093.279.279.279h7.161c.475 0 .868.165 1.178.496.33.331.496.723.496 1.178 0 .455-.166.847-.496 1.178-.31.31-.703.465-1.178.465h-7.161c-.186 0-.279.093-.279.279v6.2c0 .186.093.279.279.279h7.688a1.7 1.7 0 011.24.527 1.6 1.6 0 01.527 1.209c0 .475-.176.889-.527 1.24a1.7 1.7 0 01-1.24.527h-10.54zm17.873-19.034c-.475 0-.889-.165-1.24-.496a1.698 1.698 0 01-.527-1.24v-.093c0-.475.176-.889.527-1.24a1.698 1.698 0 011.24-.527h13.206c.475 0 .889.176 1.24.527.351.351.527.765.527 1.24v.093c0 .475-.176.889-.527 1.24a1.749 1.749 0 01-1.24.496h-4.154c-.165 0-.248.093-.248.279v16.988c0 .475-.176.889-.527 1.24a1.698 1.698 0 01-1.24.527h-.868c-.475 0-.889-.176-1.24-.527a1.698 1.698 0 01-.527-1.24v-16.988c0-.186-.083-.279-.248-.279h-4.154zm23.388-.062v6.727c0 .165.093.248.279.248h1.55c3.678 0 5.518-1.312 5.518-3.937 0-2.335-1.705-3.503-5.115-3.503-.62 0-1.271.052-1.953.155-.186.041-.279.145-.279.31zM303.279 189c-.476 0-.889-.176-1.24-.527a1.694 1.694 0 01-.527-1.24v-18.941c0-.496.165-.94.496-1.333.33-.393.744-.61 1.24-.651a54.39 54.39 0 015.084-.248c3.038 0 5.311.568 6.82 1.705 1.508 1.116 2.263 2.697 2.263 4.743 0 1.467-.403 2.759-1.209 3.875-.786 1.116-1.85 1.901-3.193 2.356-.021 0-.031.01-.031.031 0 .041.01.062.031.062.992.62 1.839 1.839 2.542 3.658l1.86 4.867c.144.393.093.765-.155 1.116a1.084 1.084 0 01-.961.527h-.961a2.57 2.57 0 01-1.457-.434 2.56 2.56 0 01-.93-1.209l-1.736-4.774c-.372-.992-.796-1.643-1.271-1.953-.476-.31-1.292-.465-2.449-.465h-1.426c-.186 0-.279.093-.279.279v6.789c0 .475-.176.889-.527 1.24a1.6 1.6 0 01-1.209.527h-.775zm20.267 0c-.475 0-.889-.176-1.24-.527a1.698 1.698 0 01-.527-1.24v-19.096c0-.475.176-.889.527-1.24a1.698 1.698 0 011.24-.527h1.24c.475 0 .889.176 1.24.527.351.351.527.765.527 1.24v19.096c0 .475-.176.889-.527 1.24a1.698 1.698 0 01-1.24.527h-1.24zm17.749.31c-3.265 0-5.859-1.002-7.781-3.007-1.901-2.025-2.852-4.898-2.852-8.618 0-3.679.92-6.531 2.759-8.556 1.86-2.046 4.454-3.069 7.781-3.069 1.53 0 2.811.093 3.844.279.496.083.91.331 1.24.744.331.413.496.878.496 1.395v.248c0 .434-.186.775-.558 1.023a1.34 1.34 0 01-1.147.217c-1.012-.269-2.149-.403-3.41-.403-2.046 0-3.658.703-4.836 2.108-1.157 1.405-1.736 3.41-1.736 6.014 0 2.583.6 4.588 1.798 6.014 1.22 1.405 2.842 2.108 4.867 2.108 1.364 0 2.532-.124 3.503-.372a1.34 1.34 0 011.147.217c.372.248.558.589.558 1.023v.217c0 .517-.165.982-.496 1.395-.31.393-.723.63-1.24.713-1.178.207-2.49.31-3.937.31zm24.925-11.625c0-5.373-1.963-8.06-5.89-8.06-3.927 0-5.89 2.687-5.89 8.06 0 5.373 1.963 8.06 5.89 8.06 3.927 0 5.89-2.687 5.89-8.06zm1.643 8.556c-1.839 2.046-4.35 3.069-7.533 3.069-3.183 0-5.704-1.023-7.564-3.069-1.839-2.046-2.759-4.898-2.759-8.556 0-3.658.92-6.51 2.759-8.556 1.86-2.046 4.381-3.069 7.564-3.069s5.694 1.023 7.533 3.069c1.86 2.046 2.79 4.898 2.79 8.556 0 3.658-.93 6.51-2.79 8.556zm12.264-6.789c-2.48-.827-4.278-1.829-5.394-3.007-1.095-1.178-1.643-2.604-1.643-4.278 0-1.881.63-3.369 1.891-4.464 1.261-1.095 3.028-1.643 5.301-1.643 1.922 0 3.596.217 5.022.651.496.145.889.444 1.178.899.31.434.465.92.465 1.457v.279c0 .393-.176.703-.527.93a1.187 1.187 0 01-1.085.093 13.057 13.057 0 00-4.743-.899c-1.033 0-1.819.238-2.356.713-.537.475-.806 1.137-.806 1.984 0 1.488.971 2.552 2.914 3.193 2.79.889 4.722 1.901 5.797 3.038 1.095 1.137 1.643 2.604 1.643 4.402 0 4.34-2.676 6.51-8.029 6.51-1.674 0-3.193-.258-4.557-.775a2.334 2.334 0 01-1.178-.961 2.927 2.927 0 01-.403-1.519v-.372c0-.393.165-.672.496-.837a1.06 1.06 0 011.023-.031 9.51 9.51 0 004.309 1.023c2.625 0 3.937-.992 3.937-2.976 0-.806-.248-1.467-.744-1.984-.496-.537-1.333-1.013-2.511-1.426zM402.485 189c-.476 0-.889-.176-1.24-.527a1.694 1.694 0 01-.527-1.24v-19.096c0-.475.175-.889.527-1.24a1.696 1.696 0 011.24-.527h10.54a1.7 1.7 0 011.24.527c.351.351.527.765.527 1.24s-.176.889-.527 1.24a1.75 1.75 0 01-1.24.496h-7.688c-.186 0-.279.093-.279.279v4.991c0 .186.093.279.279.279h7.161c.475 0 .868.165 1.178.496.33.331.496.723.496 1.178 0 .455-.166.847-.496 1.178-.31.31-.703.465-1.178.465h-7.161c-.186 0-.279.093-.279.279v6.2c0 .186.093.279.279.279h7.688a1.7 1.7 0 011.24.527 1.6 1.6 0 01.527 1.209c0 .475-.176.889-.527 1.24a1.7 1.7 0 01-1.24.527h-10.54zm27.427 0c-.476 0-.889-.176-1.24-.527a1.749 1.749 0 01-.496-1.24v-19.096c0-.475.165-.889.496-1.24a1.696 1.696 0 011.24-.527h10.23a1.7 1.7 0 011.24.527c.351.351.527.765.527 1.24s-.176.889-.527 1.24a1.75 1.75 0 01-1.24.496h-7.378c-.166 0-.248.093-.248.279v5.425c0 .165.082.248.248.248h6.851c.454 0 .847.165 1.178.496.33.31.496.703.496 1.178s-.166.878-.496 1.209c-.331.31-.724.465-1.178.465h-6.851c-.166 0-.248.083-.248.248v7.812c0 .475-.176.889-.527 1.24a1.7 1.7 0 01-1.24.527h-.837zm18.195 0c-.476 0-.889-.176-1.24-.527a1.694 1.694 0 01-.527-1.24v-19.096c0-.475.175-.889.527-1.24a1.696 1.696 0 011.24-.527h10.54a1.7 1.7 0 011.24.527c.351.351.527.765.527 1.24s-.176.889-.527 1.24a1.75 1.75 0 01-1.24.496h-7.688c-.186 0-.279.093-.279.279v4.991c0 .186.093.279.279.279h7.161c.475 0 .868.165 1.178.496.33.331.496.723.496 1.178 0 .455-.166.847-.496 1.178-.31.31-.703.465-1.178.465h-7.161c-.186 0-.279.093-.279.279v6.2c0 .186.093.279.279.279h7.688a1.7 1.7 0 011.24.527 1.6 1.6 0 01.527 1.209c0 .475-.176.889-.527 1.24a1.7 1.7 0 01-1.24.527h-10.54zm21.159-19.096v6.727c0 .165.093.248.279.248h1.55c3.679 0 5.518-1.312 5.518-3.937 0-2.335-1.705-3.503-5.115-3.503-.62 0-1.271.052-1.953.155-.186.041-.279.145-.279.31zM466.755 189c-.475 0-.889-.176-1.24-.527a1.698 1.698 0 01-.527-1.24v-18.941c0-.496.165-.94.496-1.333.331-.393.744-.61 1.24-.651a54.406 54.406 0 015.084-.248c3.038 0 5.311.568 6.82 1.705 1.509 1.116 2.263 2.697 2.263 4.743 0 1.467-.403 2.759-1.209 3.875-.785 1.116-1.85 1.901-3.193 2.356-.021 0-.031.01-.031.031 0 .041.01.062.031.062.992.62 1.839 1.839 2.542 3.658l1.86 4.867c.145.393.093.765-.155 1.116a1.083 1.083 0 01-.961.527h-.961a2.572 2.572 0 01-1.457-.434 2.56 2.56 0 01-.93-1.209l-1.736-4.774c-.372-.992-.796-1.643-1.271-1.953-.475-.31-1.292-.465-2.449-.465h-1.426c-.186 0-.279.093-.279.279v6.789c0 .475-.176.889-.527 1.24a1.6 1.6 0 01-1.209.527h-.775zm22.159-19.096v6.727c0 .165.093.248.279.248h1.55c3.678 0 5.518-1.312 5.518-3.937 0-2.335-1.705-3.503-5.115-3.503-.62 0-1.271.052-1.953.155-.186.041-.279.145-.279.31zM486.403 189c-.476 0-.889-.176-1.24-.527a1.694 1.694 0 01-.527-1.24v-18.941c0-.496.165-.94.496-1.333.33-.393.744-.61 1.24-.651a54.39 54.39 0 015.084-.248c3.038 0 5.311.568 6.82 1.705 1.508 1.116 2.263 2.697 2.263 4.743 0 1.467-.403 2.759-1.209 3.875-.786 1.116-1.85 1.901-3.193 2.356-.021 0-.031.01-.031.031 0 .041.01.062.031.062.992.62 1.839 1.839 2.542 3.658l1.86 4.867c.144.393.093.765-.155 1.116a1.084 1.084 0 01-.961.527h-.961a2.57 2.57 0 01-1.457-.434 2.56 2.56 0 01-.93-1.209l-1.736-4.774c-.372-.992-.796-1.643-1.271-1.953-.476-.31-1.292-.465-2.449-.465h-1.426c-.186 0-.279.093-.279.279v6.789c0 .475-.176.889-.527 1.24a1.6 1.6 0 01-1.209.527h-.775zm25.964-18.786l-2.728 9.734a.202.202 0 00.031.186c.041.062.093.093.155.093h5.146c.062 0 .113-.031.155-.093a.208.208 0 00.031-.186l-2.728-9.734c0-.021-.011-.031-.031-.031-.021 0-.031.01-.031.031zM504.338 189c-.434 0-.775-.176-1.023-.527a1.197 1.197 0 01-.155-1.147l6.417-19.282c.186-.496.485-.899.899-1.209a2.4 2.4 0 011.426-.465h1.116c.537 0 1.012.155 1.426.465.434.31.733.713.899 1.209l6.417 19.282a1.2 1.2 0 01-.155 1.147 1.186 1.186 0 01-1.023.527h-1.116c-.496 0-.961-.155-1.395-.465a2.42 2.42 0 01-.837-1.24l-.992-3.503c-.021-.165-.135-.248-.341-.248h-7.006c-.186 0-.3.083-.341.248l-.992 3.503c-.124.496-.403.909-.837 1.24a2.27 2.27 0 01-1.395.465h-.992zm29.327.31c-3.327 0-6.024-1.033-8.091-3.1-2.046-2.087-3.069-4.929-3.069-8.525 0-3.637 1.023-6.479 3.069-8.525 2.046-2.067 4.878-3.1 8.494-3.1 1.488 0 2.842.103 4.061.31.496.083.91.331 1.24.744.331.393.496.847.496 1.364v.124c0 .434-.175.785-.527 1.054a1.339 1.339 0 01-1.178.248 16.79 16.79 0 00-3.627-.403c-2.5 0-4.402.692-5.704 2.077-1.281 1.364-1.922 3.4-1.922 6.107 0 2.625.631 4.65 1.891 6.076 1.282 1.405 3.007 2.108 5.177 2.108.889 0 1.767-.124 2.635-.372.166-.041.248-.155.248-.341v-6.138c0-.186-.082-.279-.248-.279h-3.875c-.454 0-.847-.155-1.178-.465a1.664 1.664 0 01-.465-1.178c0-.475.155-.868.465-1.178a1.61 1.61 0 011.178-.496h6.51c.476 0 .889.176 1.24.527.352.351.527.765.527 1.24v9.021c0 .537-.155 1.023-.465 1.457-.31.434-.713.723-1.209.868-1.756.517-3.647.775-5.673.775zm13.86-.31c-.476 0-.889-.176-1.24-.527a1.694 1.694 0 01-.527-1.24v-19.096c0-.475.175-.889.527-1.24a1.696 1.696 0 011.24-.527h10.54a1.7 1.7 0 011.24.527c.351.351.527.765.527 1.24s-.176.889-.527 1.24a1.75 1.75 0 01-1.24.496h-7.688c-.186 0-.279.093-.279.279v4.991c0 .186.093.279.279.279h7.161c.475 0 .868.165 1.178.496.33.331.496.723.496 1.178 0 .455-.166.847-.496 1.178-.31.31-.703.465-1.178.465h-7.161c-.186 0-.279.093-.279.279v6.2c0 .186.093.279.279.279h7.688a1.7 1.7 0 011.24.527 1.6 1.6 0 01.527 1.209c0 .475-.176.889-.527 1.24a1.7 1.7 0 01-1.24.527h-10.54zm18.617 0c-.475 0-.889-.176-1.24-.527a1.749 1.749 0 01-.496-1.24v-19.096c0-.475.165-.889.496-1.24a1.698 1.698 0 011.24-.527h.682c1.178 0 2.046.517 2.604 1.55l7.657 13.826c0 .021.01.031.031.031.021 0 .031-.01.031-.031v-13.609c0-.475.176-.889.527-1.24a1.698 1.698 0 011.24-.527h.682a1.6 1.6 0 011.209.527c.351.351.527.765.527 1.24v19.096c0 .475-.176.889-.527 1.24a1.6 1.6 0 01-1.209.527h-.682c-1.178 0-2.046-.517-2.604-1.55l-7.657-13.826c0-.021-.01-.031-.031-.031-.021 0-.031.01-.031.031v13.609c0 .475-.176.889-.527 1.24a1.698 1.698 0 01-1.24.527h-.682zm26.353-9.548c-2.48-.827-4.278-1.829-5.394-3.007-1.095-1.178-1.643-2.604-1.643-4.278 0-1.881.631-3.369 1.891-4.464 1.261-1.095 3.028-1.643 5.301-1.643 1.922 0 3.596.217 5.022.651.496.145.889.444 1.178.899.31.434.465.92.465 1.457v.279c0 .393-.175.703-.527.93a1.187 1.187 0 01-1.085.093 13.057 13.057 0 00-4.743-.899c-1.033 0-1.818.238-2.356.713-.537.475-.806 1.137-.806 1.984 0 1.488.972 2.552 2.914 3.193 2.79.889 4.723 1.901 5.797 3.038 1.096 1.137 1.643 2.604 1.643 4.402 0 4.34-2.676 6.51-8.029 6.51-1.674 0-3.193-.258-4.557-.775a2.338 2.338 0 01-1.178-.961 2.937 2.937 0 01-.403-1.519v-.372c0-.393.166-.672.496-.837a1.06 1.06 0 011.023-.031 9.513 9.513 0 004.309 1.023c2.625 0 3.937-.992 3.937-2.976 0-.806-.248-1.467-.744-1.984-.496-.537-1.333-1.013-2.511-1.426z" fill="#fff"/><path fill="#F60" d="M0 0h330v154H0z"/><path d="M47.409 89.96h22.176c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v10.152c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576H32.073c-.528 0-.984-.192-1.368-.576a1.869 1.869 0 01-.576-1.368V55.544c0-.528.192-.984.576-1.368.384-.384.84-.576 1.368-.576h36.936c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v10.152c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576h-21.6v4.536h20.016c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v9.36c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576H47.409v4.536zm68.926-36.36h13.032c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v46.512c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576h-11.376c-1.248 0-2.232-.552-2.952-1.656l-12.168-18.36v18.072c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576H87.895c-.528 0-.984-.192-1.368-.576a1.869 1.869 0 01-.576-1.368V55.544c0-.528.192-.984.576-1.368.384-.384.84-.576 1.368-.576h11.376c1.344 0 2.328.552 2.952 1.656L114.391 75.2V55.544c0-.528.192-.984.576-1.368.384-.384.84-.576 1.368-.576zm55.927 20.016h19.8c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v9.36c0 6.336-2.256 11.232-6.768 14.688-4.512 3.408-10.536 5.112-18.072 5.112-7.488 0-13.392-1.656-17.712-4.968-4.32-3.36-6.48-8.376-6.48-15.048V72.608c0-6.384 2.208-11.256 6.624-14.616 4.416-3.408 10.296-5.112 17.64-5.112 7.392 0 13.368 1.56 17.928 4.68 4.56 3.072 6.84 6.864 6.84 11.376 0 .432-.168.816-.504 1.152a1.465 1.465 0 01-1.08.432H176.51c-.96 0-1.656-.264-2.088-.792-.96-1.248-1.68-1.968-2.16-2.16-1.104-.432-2.112-.648-3.024-.648-3.696 0-5.544 1.8-5.544 5.4v12.24c0 4.08 1.968 6.12 5.904 6.12 4.032 0 6.048-1.728 6.048-5.184h-3.384c-.528 0-.984-.192-1.368-.576a1.869 1.869 0 01-.576-1.368V75.56c0-.528.192-.984.576-1.368.384-.384.84-.576 1.368-.576zm52.739 16.344h22.176c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v10.152c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576h-37.512c-.528 0-.984-.192-1.368-.576a1.869 1.869 0 01-.576-1.368V55.544c0-.528.192-.984.576-1.368.384-.384.84-.576 1.368-.576h36.936c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v10.152c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576h-21.6v4.536h20.016c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v9.36c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576h-20.016v4.536zm56.831-.72h19.944c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v10.872c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576h-36.288c-.528 0-.984-.192-1.368-.576a1.869 1.869 0 01-.576-1.368V55.544c0-.528.192-.984.576-1.368.384-.384.84-.576 1.368-.576h14.4c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368V89.24z" fill="#000000"/><path d="M376.717 53.6h14.112c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v46.512c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576h-14.112c-.528 0-.984-.192-1.368-.576a1.869 1.869 0 01-.576-1.368V86.504h-11.664v15.552c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576h-14.112c-.528 0-.984-.168-1.368-.504-.384-.384-.576-.864-.576-1.44V55.544c0-.528.192-.984.576-1.368.384-.384.84-.576 1.368-.576h14.112c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v15.12h11.664v-15.12c0-.528.192-.984.576-1.368.384-.384.84-.576 1.368-.576zm36.288 4.608c4.416-3.552 10.248-5.328 17.496-5.328 7.248 0 13.056 1.8 17.424 5.4 4.416 3.552 6.624 8.568 6.624 15.048V84.56c0 6.576-2.184 11.592-6.552 15.048-4.32 3.408-10.152 5.112-17.496 5.112-7.344 0-13.2-1.704-17.568-5.112-4.32-3.456-6.48-8.472-6.48-15.048V73.328c0-6.528 2.184-11.568 6.552-15.12zm13.608 31.032c.96.96 2.256 1.44 3.888 1.44 1.632 0 2.928-.48 3.888-1.44s1.44-2.424 1.44-4.392V72.752c0-1.92-.48-3.36-1.44-4.32-.96-1.008-2.256-1.512-3.888-1.512-1.632 0-2.928.504-3.888 1.512-.96.96-1.44 2.4-1.44 4.32v12.096c0 1.968.48 3.432 1.44 4.392zm71.482-35.64h14.112c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v28.944c0 6.72-2.088 11.784-6.264 15.192-4.176 3.36-9.864 5.04-17.064 5.04-7.152 0-12.84-1.68-17.064-5.04-4.176-3.36-6.264-8.424-6.264-15.192V55.544c0-.528.192-.984.576-1.368.384-.384.84-.576 1.368-.576h14.112c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v29.16c0 3.696 1.776 5.544 5.328 5.544 3.552 0 5.328-1.848 5.328-5.544v-29.16c0-.528.192-.984.576-1.368.384-.384.84-.576 1.368-.576zm29.147 15.84c0-4.896 2.016-8.88 6.048-11.952 4.08-3.072 9.408-4.608 15.984-4.608 6.624 0 12.024 1.608 16.2 4.824 4.224 3.216 6.336 6.576 6.336 10.08 0 .432-.168.816-.504 1.152a1.382 1.382 0 01-1.008.432h-14.4c-1.104 0-2.112-.408-3.024-1.224-.912-.816-2.136-1.224-3.672-1.224-2.304 0-3.456.672-3.456 2.016 0 .72.552 1.32 1.656 1.8 1.152.48 3.264.912 6.336 1.296 7.152.912 12.24 2.592 15.264 5.04 3.072 2.4 4.608 6.072 4.608 11.016 0 4.896-2.256 8.904-6.768 12.024-4.464 3.072-10.32 4.608-17.568 4.608-7.248 0-12.936-1.488-17.064-4.464-4.128-2.976-6.192-6.6-6.192-10.872 0-.432.144-.792.432-1.08.336-.336.72-.504 1.152-.504h13.68c1.008 0 2.112.48 3.312 1.44 1.248.96 2.952 1.44 5.112 1.44 3.6 0 5.4-.672 5.4-2.016 0-.864-.648-1.512-1.944-1.944-1.296-.48-3.744-.96-7.344-1.44-12.384-1.632-18.576-6.912-18.576-15.84zm76.226 20.52h22.176c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v10.152c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576h-37.512c-.528 0-.984-.192-1.368-.576a1.869 1.869 0 01-.576-1.368V55.544c0-.528.192-.984.576-1.368.384-.384.84-.576 1.368-.576h36.936c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v10.152c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576h-21.6v4.536h20.016c.528 0 .984.192 1.368.576.384.384.576.84.576 1.368v9.36c0 .528-.192.984-.576 1.368-.384.384-.84.576-1.368.576h-20.016v4.536z" fill="#fff"/></svg>
                </a>
            </div>
        @endif

        <div class="search">
            <input class="search--input" type="text" placeholder="Buscar" />
            <div class="search--icon">
                <svg heigth="20" width="20" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="-1 0 136 136.219" width="136pt"><path d="M93.148 80.832c16.352-23.09 10.883-55.062-12.207-71.41S25.88-1.461 9.531 21.632C-6.816 44.723-1.352 76.693 21.742 93.04a51.226 51.226 0 0055.653 2.3l37.77 37.544c4.077 4.293 10.862 4.465 15.155.387 4.293-4.075 4.465-10.86.39-15.153a9.21 9.21 0 00-.39-.39zm-41.84 3.5c-18.245.004-33.038-14.777-33.05-33.023-.004-18.246 14.777-33.04 33.027-33.047 18.223-.008 33.008 14.75 33.043 32.972.031 18.25-14.742 33.067-32.996 33.098h-.023zm0 0"/></svg>
            </div>
            <div class="cart">
                <input class="hide" type="checkbox" id="input-icon" />
                <label class="cart--icon" for="input-icon">
                    <div class="cart--icon-total">3</div>
                    <svg heigth="20" width="20" fill="#ff6600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 424.449 424.449"><circle cx="170.241" cy="374.273" r="50.176"/><path d="M316.673 324.098c-27.711 0-50.176 22.465-50.176 50.176s22.465 50.176 50.176 50.176c27.711 0 50.176-22.465 50.176-50.176s-22.465-50.176-50.176-50.176zM402.177 272.897H140.545l-5.12-29.696h215.04a15.36 15.36 0 0014.336-9.728l51.2-129.024c3.111-7.892-.766-16.812-8.658-19.922a15.349 15.349 0 00-5.678-1.07H108.801L96.513 12.801a15.36 15.36 0 00-15.36-12.8h-58.88c-8.483 0-15.36 6.877-15.36 15.36s6.877 15.36 15.36 15.36h46.08l44.032 260.096a15.36 15.36 0 0015.36 12.8h274.432c8.483 0 15.36-6.877 15.36-15.36s-6.877-15.36-15.36-15.36z"/></svg>
                </label>
                <div class="cart--total">
                    <b>Total</b>
                    <p>R$ 125,00</p>
                </div>
            </div>
        </div>

    </div>

    <nav id="menu" class="menu">
        <input class="menu--button" type="checkbox" id="menu--button" />
        <label class="menu--icon" for="menu--button">
            <span class="navicon"></span>
        </label>
        <ul class="menu--list">
            <li class="menu--item menu--item-active"><a href="{{ url('/') }}">Página inicial</a></li>
            <li class="menu--item"><a href="{{ url('/produtos') }}">Produtos</a></li>
            <li class="menu--item"><a href="{{ url('/quem-somos') }}">Quem Somos</a></li>
            <li class="menu--item"><a href="{{ url('/equipe') }}">Equipe</a></li>
            <li class="menu--item"><a href="{{ url('/contato') }}">Contato</a></li>
        </ul>
    </nav>

</header>
