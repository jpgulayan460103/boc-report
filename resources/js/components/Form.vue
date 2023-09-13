<template>
    <div class="container">
        <div class="row">
            <form @submit.prevent="submitForm()" ref="formRef">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <form-item label="Identification" :errors="formErrors.identification">
                                <!-- <input type="text" v-model="formData.identification" class="form-control" :class="formErrors.identification ? 'is-invalid' : ''"> -->
                                <typeahead-autocomplete
                                    :showNoData="false"
                                    :inputClass="formErrors.identification ? 'type-head form-control is-invalid' : 'type-head form-control'"
                                    :items="autocompletes.identification"
                                    @change="getAutocompleteData('identification', $event)"
                                />
                            </form-item>
                        </div>
                        <div class="col-md-4">
                            <form-item label="Consignee" :errors="formErrors.consignee">
                                <!-- <input type="text" v-model="formData.consignee" class="form-control" :class="formErrors.consignee ? 'is-invalid' : ''"> -->
                                <typeahead-autocomplete
                                    :showNoData="false"
                                    :inputClass="formErrors.consignee ? 'type-head form-control is-invalid' : 'type-head form-control'"
                                    :items="autocompletes.consignee"
                                    @change="getAutocompleteData('consignee', $event)"
                                />
                            </form-item>
                        </div>
                        <div class="col-md-4">
                            <form-item label="Location" :errors="formErrors.location">
                                <!-- <input type="text" v-model="formData.location" class="form-control" :class="formErrors.location ? 'is-invalid' : ''"> -->
                                <typeahead-autocomplete
                                    :showNoData="false"
                                    :inputClass="formErrors.location ? 'type-head form-control is-invalid' : 'type-head form-control'"
                                    :items="autocompletes.location"
                                    @change="getAutocompleteData('location', $event)"
                                />
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form-item label="Container Numbers" :errors="formErrors.container_numbers">
                                <textarea v-model="formData.container_numbers" class="form-control" :class="formErrors.container_numbers ? 'is-invalid' : ''" />
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form-item label="Bill of Lading Number" :errors="formErrors.bill_of_lading_number">
                                <input type="text" v-model="formData.bill_of_lading_number" class="form-control" :class="formErrors.bill_of_lading_number ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-6">
                            <form-item label="Date of Examination" :errors="formErrors.examination_date">
                                <input type="date" v-model="formData.examination_date" class="form-control" :class="formErrors.examination_date ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form-item label="Description as Declared" :errors="formErrors.description_as_declared">
                                <textarea v-model="formData.description_as_declared" class="form-control" :class="formErrors.description_as_declared ? 'is-invalid' : ''" />
                            </form-item>
                        </div>
                        <div class="col-md-6">
                            <form-item label="Description as Found" :errors="formErrors.description_as_found">
                                <textarea v-model="formData.description_as_found" class="form-control" :class="formErrors.description_as_found ? 'is-invalid' : ''" />
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <form-item label="Net Weight (kgs)" :errors="formErrors.net_weight">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.net_weight" class="form-control" :class="formErrors.net_weight ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="Customs Value ($)" :errors="formErrors.customs_value">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.customs_value" class="form-control" :class="formErrors.customs_value ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="Freight ($)" :errors="formErrors.freight">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.freight" class="form-control" :class="formErrors.freight ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="Insurance ($)" :errors="formErrors.insurance">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.insurance" class="form-control" :class="formErrors.insurance ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <form-item label="Dutiable Value ($)" :errors="formErrors.dutiable_value">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.dutiable_value" class="form-control" :class="formErrors.dutiable_value ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="Exchange Rate" :errors="formErrors.exchange_rate">
                                <!-- <input type="text" v-model="formData.exchange_rate" class="form-control" :class="formErrors.exchange_rate ? 'is-invalid' : ''"> -->
                                <typeahead-autocomplete
                                    :showNoData="false"
                                    :inputClass="formErrors.exchange_rate ? 'type-head form-control is-invalid' : 'type-head form-control'"
                                    :items="autocompletes.exchange_rate"
                                    @change="getAutocompleteData('exchange_rate', $event)"
                                />
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="Dutiable Value (DV)" :errors="formErrors.dutiable_value_dv">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional"  v-model="formData.dutiable_value_dv" class="form-control" :class="formErrors.dutiable_value_dv ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="Duty Rate" :errors="formErrors.duty_rate">
                                <!-- <input type="text" v-model="formData.duty_rate" class="form-control" :class="formErrors.duty_rate ? 'is-invalid' : ''"> -->
                                <typeahead-autocomplete
                                    :showNoData="false"
                                    :inputClass="formErrors.duty_rate ? 'type-head form-control is-invalid' : 'type-head form-control'"
                                    :items="autocompletes.duty_rate"
                                    @change="getAutocompleteData('duty_rate', $event)"
                                />
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <form-item label="Customs Duty" :errors="formErrors.customs_duty">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.customs_duty" class="form-control" :class="formErrors.customs_duty ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="Brokerage Fee" :errors="formErrors.brokerage_fee">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.brokerage_fee" class="form-control" :class="formErrors.brokerage_fee ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="Arrastre" :errors="formErrors.arrastre">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.arrastre" class="form-control" :class="formErrors.arrastre ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="Wharfage" :errors="formErrors.warfage">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.warfage" class="form-control" :class="formErrors.warfage ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <form-item label="IPF" :errors="formErrors.ipf">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.ipf" class="form-control" :class="formErrors.ipf ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-2">
                            <form-item label="CDS" :errors="formErrors.cds">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.cds" class="form-control" :class="formErrors.cds ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-2">
                            <form-item label="IRS" :errors="formErrors.irs">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.irs" class="form-control" :class="formErrors.irs ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="Total Landed Cost" :errors="formErrors.total_landed_cost">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.total_landed_cost" class="form-control" :class="formErrors.total_landed_cost ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="VAT" :errors="formErrors.vat">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.vat" class="form-control" :class="formErrors.vat ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form-item label="Total (ESTIMATED VALUE/ FLOOR PRICE)" :errors="formErrors.total">
                                <textarea v-model="formData.total" class="form-control" :class="formErrors.total ? 'is-invalid' : ''" />
                            </form-item>
                        </div>
                        <div class="col-md-6">
                            <form-item label="Remarks (Proposed Mode of Disposal)" :errors="formErrors.remarks">
                                <textarea v-model="formData.remarks" class="form-control" :class="formErrors.remarks ? 'is-invalid' : ''" />
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <form-item label="Prepared by" :errors="formErrors.prepared_by_name">
                                <!-- <input type="text" v-model="formData.prepared_by_name" class="form-control" :class="formErrors.prepared_by_name ? 'is-invalid' : ''"> -->
                                <typeahead-autocomplete
                                    :showNoData="false"
                                    :inputClass="formErrors.prepared_by_name ? 'type-head form-control is-invalid' : 'type-head form-control'"
                                    :items="autocompletes.prepared_by_name"
                                    @change="getAutocompleteData('prepared_by_name', $event)"
                                />
                            </form-item>
                        </div>
                        <div class="col-md-4">
                            <form-item label="Reviewed by" :errors="formErrors.reviewed_by_name">
                                <!-- <input type="text" v-model="formData.reviewed_by_name" class="form-control" :class="formErrors.reviewed_by_name ? 'is-invalid' : ''"> -->
                                <typeahead-autocomplete
                                    :showNoData="false"
                                    :inputClass="formErrors.reviewed_by_name ? 'type-head form-control is-invalid' : 'type-head form-control'"
                                    :items="autocompletes.reviewed_by_name"
                                    @change="getAutocompleteData('reviewed_by_name', $event)"
                                />
                            </form-item>
                        </div>
                        <div class="col-md-4">
                            <form-item label="Approved by" :errors="formErrors.approved_name">
                                <!-- <input type="text" v-model="formData.approved_name" class="form-control" :class="formErrors.approved_name ? 'is-invalid' : ''"> -->
                                <typeahead-autocomplete
                                    :showNoData="false"
                                    :inputClass="formErrors.approved_name ? 'type-head form-control is-invalid' : 'type-head form-control'"
                                    :items="autocompletes.approved_name"
                                    @change="getAutocompleteData('approved_name', $event)"
                                />
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <form-item label="Designation" :errors="formErrors.prepared_by_designation">
                                <!-- <input type="text" v-model="formData.prepared_by_designation" class="form-control" :class="formErrors.prepared_by_designation ? 'is-invalid' : ''"> -->
                                <typeahead-autocomplete
                                    :showNoData="false"
                                    :inputClass="formErrors.prepared_by_designation ? 'type-head form-control is-invalid' : 'type-head form-control'"
                                    :items="autocompletes.prepared_by_designation"
                                    @change="getAutocompleteData('prepared_by_designation', $event)"
                                />
                            </form-item>
                        </div>
                        <div class="col-md-4">
                            <form-item label="Designation" :errors="formErrors.reviewed_by_designation">
                                <!-- <input type="text" v-model="formData.reviewed_by_designation" class="form-control" :class="formErrors.reviewed_by_designation ? 'is-invalid' : ''"> -->
                                <typeahead-autocomplete
                                    :showNoData="false"
                                    :inputClass="formErrors.reviewed_by_designation ? 'type-head form-control is-invalid' : 'type-head form-control'"
                                    :items="autocompletes.reviewed_by_designation"
                                    @change="getAutocompleteData('reviewed_by_designation', $event)"
                                />
                            </form-item>
                        </div>
                        <div class="col-md-4">
                            <form-item label="Designation" :errors="formErrors.approved_designation">
                                <!-- <input type="text" v-model="formData.approved_designation" class="form-control" :class="formErrors.approved_designation ? 'is-invalid' : ''"> -->
                                <typeahead-autocomplete
                                    :showNoData="false"
                                    :inputClass="formErrors.approved_designation ? 'type-head form-control is-invalid' : 'type-head form-control'"
                                    :items="autocompletes.approved_designation"
                                    @change="getAutocompleteData('approved_designation', $event)"
                                />
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form-item label="Documentary Images" :errors="formErrors.reportImages" help="Can select multiple images">
                                <input @change="selectedImages" ref="reportImages" type="file" accept="image/*" class="form-control" :class="formErrors.reportImages ? 'is-invalid' : ''" multiple>
                            </form-item>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 30px;" :disabled="submit">Save</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger" style="width: 100%; margin-top: 30px;" @click="clearForm">Clear</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-success" style="width: 100%; margin-top: 30px;" v-if="!isEmpty(report)" @click="downloadReport">Download</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-4" v-for="(image, index) in images" :key="index">
                <img v-if="image" style="width: 100%;" :src="image" class="img-fluid" />
            </div>
        </div>
    </div>
</template>

<script>
    import Card from './Card.vue';
    import FormItem from './FormItem.vue';
    import { debounce, isEmpty } from 'lodash';
    import { vMaska } from "maska"
    import axios from 'axios';
    import { TypeaheadAutocomplete } from "typeahead-autocomplete";

    const options = {
        preProcess: val => val.replace(/[$,]/g, ''),
        postProcess: val => {
            if (!val) return ''

            const sub = 3 - (val.includes('.') ? val.length - val.indexOf('.') : 0)

            return Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD'
            }).format(val)
            .slice(0, sub ? -sub : undefined)
        }
    }

    export default {
        directives: { maska: vMaska },
        components: {
            Card,
            FormItem,
            TypeaheadAutocomplete
        },
        data() {
            return {
                submit: false,
                report: {},
                formData: {},
                formType: "create",
                formErrors: {},
                images: [],
                reportImages: [],
                autocompletes: {
                    identification: [],
                    consignee: [],
                    location: [],
                    exchange_rate: [],
                    duty_rate: [],
                    prepared_by_name: [],
                    reviewed_by_name: [],
                    approved_name: [],
                    prepared_by_designation: [],
                    reviewed_by_designation: [],
                    approved_designation: [],
                },
                options: {
                    preProcess: val => val.replace(/[$,]/g, ''),
                    postProcess: val => {
                        if (!val) return ''

                        const sub = 3 - (val.includes('.') ? val.length - val.indexOf('.') : 0)

                        return Intl.NumberFormat('en-US', {
                            style: 'currency',
                            currency: 'USD'
                        }).format(val)
                        .slice(1, sub ? -sub : undefined)
                    }
                },
            };
        },
        methods: {
            submitForm: debounce(function(){
                this.submit = true;
                let formData = new FormData();
                for (let index = 0; index < this.reportImages.length; index++) {
                    formData.append(`reportImages[${index}]`, this.reportImages[index]);
                }
                for (const key in this.formData) {
                    if (this.formData.hasOwnProperty(key)) {
                        formData.append(key, this.formData[key]);
                    }
                }
                axios.post('/reports', formData, {
                    headers: {
                        "Content-Type": "multipart/form-data"
                    }
                })
                .then(res => {
                    this.submit = false;
                    this.report = res.data;
                    alert('You have created a report');
                    window.open(`/reports/${res.data.id}`, "", "width=900,height=900");
                })
                .catch(err => {
                    this.submit = false;
                    this.formErrors = err.response.data.errors;
                });
            }, 500),
            selectedImages(){
                this.images = [];
                this.reportImages = this.$refs.reportImages.files;
                for (let index = 0; index < this.$refs.reportImages.files.length; index++) {
                    this.images = [
                        ...this.images,
                        URL.createObjectURL(this.$refs.reportImages.files[index])
                    ]
                }
            },
            clearForm(){
                if(confirm('Are you sure you want to clear form')){
                    this.formData = {};
                    this.formErrors = {};
                    this.images = [];
                    this.reportImages = [];
                    this.$refs.formRef.reset();
                }
            },
            downloadReport(){
                window.open(`/reports/${this.report.id}`, "", "width=900,height=900");
            },
            getAutocompleteData: debounce(function(field, e){
                if(e){
                    this.formData[field] = e.text;
                    axios.get(`/api/autocompletes/${field}`, {
                        params: {
                            q: e.text
                        }
                    })
                    .then(res => {
                        this.autocompletes[field] = res.data;
                    })
                    .catch(err => {})
                    ;
                }
            }, 100),
            isEmpty(val){
                return isEmpty(val);
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
.type-head{
    height: 35.02px !important;
}
</style>
