<x-layouts.main>
    <x-slot:title>{!! __(':name\'s account edit', ['name' => $patient->demographic->full_name]) !!}</x-slot:title>
    <x-slot:subtitle>{{ __(':name\'s account edit.', ['name' => $patient->demographic->full_name]) }}</x-slot:subtitle>
    <x-slot:section>{{ $patient->demographic->full_name }}</x-slot:section>
    <x-slot:sidebar>@include('pages.patients.submenu')</x-slot:sidebar>
    <x-ui.forms.holder :url="route('patients.profile.update', ['pid' => $patient->pid])">
        <h5 class="mt-0.5 mb-4 pb-3 border-b border-secondary-light/10 uppercase font-bold">{{ __('Patient key information') }}</h5>
        <div class="grid gap-8 grid-cols-2 mb-12">
            <div>
                <x-ui.forms.text-input :label="__('External ID')" name="eid"
                                       value="{{ old('eid', $patient->eid) }}" rqd idx="1"/>
            </div>
            <div>
                <x-ui.forms.text-input :label="__('Patient ID')" name="pid"
                                       value="{{ old('pid', $patient->pid) }}" rdo dis/>
            </div>
        </div>
        <div class="grid gap-8 grid-cols-2 mb-12">
            <div>
                <h5 class="mt-0.5 mb-4 pb-3 border-b border-secondary-light/10 uppercase font-bold">{{ __('Personal information') }}</h5>
                <div class="grid gap-4 grid-cols-4 mb-4">
                    <div>
                        <x-ui.forms.text-input :label="__('Title')" name="demographic[title]"
                                               value="{{ old('demographic.title', $patient->demographic->title) }}" idx="2"/>
                    </div>
                    <div>
                        <x-ui.forms.text-input :label="__('Last Name')" name="demographic[last_name]"
                                               value="{{ old('demographic.last_name', $patient->demographic->last_name) }}" rqd atf
                                               idx="3"/>
                    </div>
                    <div>
                        <x-ui.forms.text-input :label="__('First Name')" name="demographic[first_name]"
                                               value="{{ old('demographic.first_name', $patient->demographic->first_name) }}" rqd idx="4"/>
                    </div>
                    <div>
                        <x-ui.forms.text-input :label="__('Middle Name')" name="demographic[middle_name]"
                                               value="{{ old('demographic.middle_name', $patient->demographic->middle_name) }}" idx="5"/>
                    </div>
                </div>
                <div class="grid gap-4 grid-cols-4">
                    <div>
                        <x-ui.forms.text-input :label="__('DOB')" name="demographic[date_of_birth]"
                                               value="{{ old('demographic.date_of_birth', $patient->demographic->date_of_birth) }}" idx="6"/>
                    </div>
                    <div>
                        <x-ui.forms.text-input :label="__('Gender')" name="demographic[gender]"
                                               value="{{ old('demographic.gender', $patient->demographic->gender) }}" idx="7"/>
                    </div>
                    <div>
                        <x-ui.forms.text-input :label="__('Social Security')" name="demographic[social_security]"
                                               value="{{ old('demographic.social_security', $patient->demographic->social_security) }}" idx="8"/>
                    </div>
                    <div>
                        <x-ui.forms.text-input :label="__('License')" name="demographic[license]"
                                               value="{{ old('demographic.license', $patient->demographic->license) }}" idx="9"/>
                    </div>
                </div>
            </div>
            <div>
                <h5 class="mt-0.5 mb-4 pb-3 border-b border-secondary-light/10 uppercase font-bold">{{ __('Address information') }}</h5>
                <div class="grid gap-4 grid-cols-2 mb-4">
                    <div>
                        <x-ui.forms.text-input :label="__('Street')" name="demographic[address][street_name]"
                                               value="{{ old('demographic.address.street_name', $patient->demographic->address->street_name) }}" idx="10"/>
                    </div>
                    <div>
                        <x-ui.forms.text-input :label="__('Street extended')" name="demographic[address][street_name_extended]"
                                               value="{{ old('demographic.address.street_name_extended', $patient->demographic->address->street_name_extended) }}"
                                               idx="11"/>
                    </div>
                </div>
                <div class="grid gap-4 grid-cols-4">
                    <div>
                        <x-ui.forms.text-input :label="__('City')" name="demographic[address][city]"
                                               value="{{ old('demographic.address.city', $patient->demographic->address->city) }}" idx="12"/>
                    </div>
                    <div>
                        <x-ui.forms.text-input :label="__('State')" name="demographic[address][state]"
                                               value="{{ old('demographic.address.state', $patient->demographic->address->state) }}" idx="13"/>
                    </div>
                    <div>
                        <x-ui.forms.text-input :label="__('Zip')" name="demographic[address][postal_code]"
                                               value="{{ old('demographic.address.postal_code', $patient->demographic->address->postal_code) }}" idx="14"/>
                    </div>
                    <div>
                        <x-ui.forms.text-input :label="__('Country')" name="demographic[address][country_code]"
                                               value="{{ old('demographic.address.country_code', $patient->demographic->address->country_code) }}" idx="15"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid gap-8 grid-cols-2 mb-12">
            <div class="col-span-2 text-right">
                <x-ui.forms.button>{{ __('Update') }}</x-ui.forms.button>
            </div>
        </div>
    </x-ui.forms.holder>
</x-layouts.main>
