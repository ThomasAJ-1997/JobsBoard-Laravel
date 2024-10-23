<x-layout>
    <x-page-heading> Post Job </x-page-heading>

    <x-forms.form method="POST" action="/jobs" class="pb-12">
        <x-forms.input label="Title" name="title" placeholder="Web Developer" />
        <x-forms.input label="Salary" name="salary" placeholder="$75,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Manhattan, New York City" />

        <x-forms.select label="Schedule" name="work">
            <option>Part Time </option>
            <option>Full Time </option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"></x-forms.checkbox>

        <x-forms.divider />

        <x-forms.input label="Tags (Comma seperated and no spaces)" name="tags" placeholder="TJ Productions, video, education" />

        <x-forms.button> Publish Job </x-forms.button>
    </x-forms.form>
</x-layout>
