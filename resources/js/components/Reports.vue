<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Identification</th>
                                <th style="text-align: center;">Consignee</th>
                                <th style="text-align: center;">Location</th>
                                <th style="text-align: center;">Container Numbers</th>
                                <th style="text-align: center;">Bill of Lading Number</th>
                                <th style="text-align: center;">Date of Examination</th>
                                <th style="text-align: center;">Description</th>
                                <th style="text-align: center; width: 200px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="report in reports">
                                <td style="text-align: center;">{{ report.identification }}</td>
                                <td style="text-align: center;">{{ report.consignee }}</td>
                                <td style="text-align: center;">{{ report.location }}</td>
                                <td style="text-align: center;">{{ report.container_numbers }}</td>
                                <td style="text-align: center;">{{ report.bill_of_lading_number }}</td>
                                <td style="text-align: center;">{{ report.examination_date }}</td>
                                <td style="text-align: center;">{{ report.description_as_declared }}</td>
                                <td style="text-align: center;">
                                    <button type="button" class="btn btn-success" @click="downloadReport(report)"><i class="bi bi-download"></i></button>
                                    <button type="button" class="btn btn-primary" @click="editReport(report)"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger" @click="deleteReport(report)"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        props: ['reports'],
        methods: {
            downloadReport(report){
                window.open(`/reports/${report.id}`, "", "width=900,height=900");
            },
            editReport(report){
                window.location = `/reports/${report.id}/edit`;
            },
            deleteReport(report){
                if(confirm("Are you sure to delete")){
                    axios.delete(`/reports/${report.id}`)
                    .then(res => {
                        window.location.reload();
                    });
                }
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
