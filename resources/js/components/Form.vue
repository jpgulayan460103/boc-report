<template>
    <div class="container">
        <div class="row">
            <form @submit.prevent="submitForm()">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <form-item label="identification" :errors="formErrors.identification">
                                <input type="text" v-model="formData.identification" class="form-control" :class="formErrors.identification ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-4">
                            <form-item label="consignee" :errors="formErrors.consignee">
                                <input type="text" v-model="formData.consignee" class="form-control" :class="formErrors.consignee ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-4">
                            <form-item label="location" :errors="formErrors.location">
                                <input type="text" v-model="formData.location" class="form-control" :class="formErrors.location ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form-item label="container_numbers" :errors="formErrors.container_numbers">
                                <textarea v-model="formData.container_numbers" class="form-control" :class="formErrors.container_numbers ? 'is-invalid' : ''" />
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form-item label="bill_of_lading_number" :errors="formErrors.bill_of_lading_number">
                                <input type="text" v-model="formData.bill_of_lading_number" class="form-control" :class="formErrors.bill_of_lading_number ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-6">
                            <form-item label="examination_date" :errors="formErrors.examination_date">
                                <input type="date" v-model="formData.examination_date" class="form-control" :class="formErrors.examination_date ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form-item label="description_as_declared" :errors="formErrors.description_as_declared">
                                <textarea v-model="formData.description_as_declared" class="form-control" :class="formErrors.description_as_declared ? 'is-invalid' : ''" />
                            </form-item>
                        </div>
                        <div class="col-md-6">
                            <form-item label="description_as_found" :errors="formErrors.description_as_found">
                                <textarea v-model="formData.description_as_found" class="form-control" :class="formErrors.description_as_found ? 'is-invalid' : ''" />
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <form-item label="net_weight" :errors="formErrors.net_weight">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.net_weight" class="form-control" :class="formErrors.net_weight ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="customs_value" :errors="formErrors.customs_value">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.customs_value" class="form-control" :class="formErrors.customs_value ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="freight" :errors="formErrors.freight">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.freight" class="form-control" :class="formErrors.freight ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="insurance" :errors="formErrors.insurance">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.insurance" class="form-control" :class="formErrors.insurance ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <form-item label="dutiable_value" :errors="formErrors.dutiable_value">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.dutiable_value" class="form-control" :class="formErrors.dutiable_value ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="exchange_rate" :errors="formErrors.exchange_rate">
                                <input type="text" v-model="formData.exchange_rate" class="form-control" :class="formErrors.exchange_rate ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="dutiable_value_dv" :errors="formErrors.dutiable_value_dv">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional"  v-model="formData.dutiable_value_dv" class="form-control" :class="formErrors.dutiable_value_dv ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="duty_rate" :errors="formErrors.duty_rate">
                                <input type="text" v-model="formData.duty_rate" class="form-control" :class="formErrors.duty_rate ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <form-item label="customs_duty" :errors="formErrors.customs_duty">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.customs_duty" class="form-control" :class="formErrors.customs_duty ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="brokerage_fee" :errors="formErrors.brokerage_fee">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.brokerage_fee" class="form-control" :class="formErrors.brokerage_fee ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="arrastre" :errors="formErrors.arrastre">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.arrastre" class="form-control" :class="formErrors.arrastre ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="warfage" :errors="formErrors.warfage">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.warfage" class="form-control" :class="formErrors.warfage ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <form-item label="ipf" :errors="formErrors.ipf">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.ipf" class="form-control" :class="formErrors.ipf ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="cds" :errors="formErrors.cds">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.cds" class="form-control" :class="formErrors.cds ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="total_landed_cost" :errors="formErrors.total_landed_cost">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.total_landed_cost" class="form-control" :class="formErrors.total_landed_cost ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-3">
                            <form-item label="vat" :errors="formErrors.vat">
                                <input v-maska:[options] data-maska="0.99" data-maska-tokens="0:\d:multiple|9:\d:optional" v-model="formData.vat" class="form-control" :class="formErrors.vat ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form-item label="total" :errors="formErrors.total">
                                <input type="text" v-model="formData.total" class="form-control" :class="formErrors.total ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-6">
                            <form-item label="remarks" :errors="formErrors.remarks">
                                <input type="text" v-model="formData.remarks" class="form-control" :class="formErrors.remarks ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <form-item label="prepared_by_name" :errors="formErrors.prepared_by_name">
                                <input type="text" v-model="formData.prepared_by_name" class="form-control" :class="formErrors.prepared_by_name ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-4">
                            <form-item label="reviewed_by_name" :errors="formErrors.reviewed_by_name">
                                <input type="text" v-model="formData.reviewed_by_name" class="form-control" :class="formErrors.reviewed_by_name ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-4">
                            <form-item label="approved_name" :errors="formErrors.approved_name">
                                <input type="text" v-model="formData.approved_name" class="form-control" :class="formErrors.approved_name ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <form-item label="prepared_by_designation" :errors="formErrors.prepared_by_designation">
                                <input type="text" v-model="formData.prepared_by_designation" class="form-control" :class="formErrors.prepared_by_designation ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-4">
                            <form-item label="reviewed_by_designation" :errors="formErrors.reviewed_by_designation">
                                <input type="text" v-model="formData.reviewed_by_designation" class="form-control" :class="formErrors.reviewed_by_designation ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                        <div class="col-md-4">
                            <form-item label="approved_designation" :errors="formErrors.approved_designation">
                                <input type="text" v-model="formData.approved_designation" class="form-control" :class="formErrors.approved_designation ? 'is-invalid' : ''">
                            </form-item>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <form-item label="reportImages" :errors="formErrors.reportImages">
                                <input @change="selectedImages" ref="reportImages" type="file" accept="image/*" class="form-control" :class="formErrors.reportImages ? 'is-invalid' : ''" multiple>
                            </form-item>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 30px;">Save</button>
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
    import { debounce } from 'lodash';
    import { vMaska } from "maska"
    import axios from 'axios';

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
            FormItem
        },
        data() {
            return {
                submit: false,
                formData: {},
                formType: "create",
                formErrors: {},
                images: [],
                reportImages: [],
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
                let formData = new FormData();
                for (let index = 0; index < this.reportImages.length; index++) {
                    formData.append(`reportImages[${index}]`, this.reportImages[index]);
                }
                for (const key in this.formData) {
                    if (this.formData.hasOwnProperty(key)) {
                        formData.append(key, this.formData[key]);
                    }
                }
                axios.post('/report', formData, {
                    headers: {
                        "Content-Type": "multipart/form-data"
                    }
                })
                .then(res => {

                })
                .catch(err => {
                    this.formErrors = err.response.data.errors;
                })
                ;
            }),
            selectedImages(){
                this.images = [];
                this.reportImages = this.$refs.reportImages.files;
                for (let index = 0; index < this.$refs.reportImages.files.length; index++) {
                    this.images = [
                        ...this.images,
                        URL.createObjectURL(this.$refs.reportImages.files[index])
                    ]
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
