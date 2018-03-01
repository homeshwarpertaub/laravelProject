@extends('applicant/app')
@section('title','HomePage')
@section('main-content')

    {{--<div class="container">--}}
        {{--<div id="appp">--}}
            {{--<template id="step1" v-if="currentStep == 1">--}}
                {{--<h1>Step 1</h1>--}}

                {{--<div>--}}
                    {{--<input type="text" name="name" v-model="step1.name" placeholder="name">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<input type="text" name="email" v-model="step1.email" placeholder="email">--}}
                {{--</div>--}}
                {{--<button @click="back()">Back</button>--}}
                {{--<button type="button" @click.prevent="goToStep(2)">Continue</button>--}}
            {{--</template>--}}
            {{--<template id="step2" v-if="currentStep == 2">--}}
                {{--<h1>Step 2</h1>--}}

                {{--<div>--}}
                    {{--<input type="text" name="city" v-model="step2.city" placeholder="city">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<input type="text" name="state" v-model="step2.state" placeholder="state">--}}
                {{--</div>--}}

                {{--<button type="button" @click.prevent="goToStep(3)">Finish</button>--}}
            {{--</template>--}}
            {{--<template id="step3" v-if="currentStep == 3">--}}
                {{--<strong>Name:</strong> @{{ step1.name }}<br />--}}
                {{--<strong>Email:</strong> @{{ step1.email }}<br />--}}
                {{--<strong>City:</strong> @{{ step2.city }}<br />--}}
                {{--<strong>State:</strong> @{{ step2.state }}--}}
            {{--</template>--}}
        {{--</div>--}}

{{--@endsection--}}
{{--@section('userFooter')--}}
    {{--<script>--}}
        {{--Vue.component('step1', {--}}
            {{--template: '#step1',--}}
            {{--props: [--}}
                {{--'currentStep',--}}
                {{--'step1'--}}
            {{--]--}}
        {{--});--}}

        {{--Vue.component('step2', {--}}
            {{--template: '#step2',--}}
            {{--props: [--}}
                {{--'currentStep',--}}
                {{--'step2'--}}
            {{--]--}}
        {{--});--}}

        {{--Vue.component('step3', {--}}
            {{--template: '#step3',--}}
            {{--props: [--}}
                {{--'currentStep',--}}
                {{--'step1',--}}
                {{--'step2'--}}
            {{--]--}}
        {{--});--}}

        {{--var appp = new Vue({--}}
            {{--el: '#appp',--}}
            {{--data: {--}}
                {{--currentStep: 1,--}}
                {{--step1: {--}}
                    {{--name: '',--}}
                    {{--email: ''--}}
                {{--},--}}
                {{--step2: {--}}
                    {{--city: '',--}}
                    {{--state: ''--}}
                {{--}--}}
            {{--},--}}
            {{--ready: function() {--}}
                {{--console.log('ready');--}}
            {{--},--}}
            {{--methods: {--}}
                {{--goToStep: function (step) {--}}
                    {{--this.currentStep = step;--}}
                {{--},--}}
                {{--back() {--}}
                    {{--if (this.currentStep > 0) {--}}
                        {{--this.currentStep----}}
                    {{--}--}}
                {{--}--}}
            {{--}--}}
        {{--});--}}


    {{--</script>--}}

@endsection