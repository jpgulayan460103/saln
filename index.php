<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        @page { margin: 0px; }
        body { margin: 0px; }
        @font-face {
            font-family: 'Bookman Old Style Custom';
            src: url("http://saln.test/fonts/BOOKOS.ttf");
        }
        .page-1, .page-2{
            /* width: 612pt !important; */
            /* height:916pt !important; */
        }
        table{
            border-collapse: collapse;
            border: 1px solid black;
        }
        table tr td, table tr th{
            border: 1px solid black;
            margin: 0;
        }
        table tr td{
            text-align: center;
        }
        body {
            font-family: "Bookman Old Style Custom";
            padding: 20px;
        }
        .btn-green {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 5px 5px;
            text-align: center;
            text-decoration: none;
        }
        .btn-red {
            background-color: #AF504C; /* Green */
            border: none;
            color: white;
            padding: 5px 5px;
            text-align: center;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="page-1"  id="app">
       
        <p style="text-align:center"><u><b>SWORN STATEMENT OF ASSETS, LIABILITIES AND NET WORTH </b></u></p>
        <p style="text-align:center"><u><b>As of DECEMBER 31, 2018</b></u></p>
        <table style="width:100%">
            <tr>
                <th>DECLARANT</th>
                <th>
                    <input autocomplete="password_new" type="text" placeholder="FAMILY NAME" v-model="formData.declarant_family_name">
                    <input autocomplete="password_new" type="text" placeholder="FIRST NAME" v-model="formData.declarant_first_name">
                    <input autocomplete="password_new" type="text" placeholder="M.I." v-model="formData.declarant_mi">
                </th>
                <th>POSITION</th>
                <th><input autocomplete="password_new" type="text" placeholder="POSITION" v-model="formData.declarant_position"></th>
            </tr>
            <tr>
                <th>ADDRESS</th>
                <th><input autocomplete="password_new" type="text" placeholder="ADDRESS" style="width:90%" v-model="formData.declarant_address"></th>
                <th>AGENCY/OFFICE:</th>
                <th><input autocomplete="password_new" type="text" placeholder="AGENCY/OFFICE" v-model="formData.declarant_agency_name"></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th>OFFICE ADDRESS:</th>
                <th><input autocomplete="password_new" type="text" placeholder="AGENCY/OFFICE" v-model="formData.declarant_agency_address"></th>
            </tr>
            <tr>
                <th>SPOUSE</th>
                <th>
                    <input autocomplete="password_new" type="text" placeholder="FAMILY NAME" v-model="formData.spouse_family_name">
                    <input autocomplete="password_new" type="text" placeholder="FIRST NAME" v-model="formData.spouse_first_name">
                    <input autocomplete="password_new" type="text" placeholder="M.I." v-model="formData.spouse_mi">
                </th>
                <th>POSITION:</th>
                <th><input autocomplete="password_new" type="text" placeholder="POSITION" v-model="formData.spouse_position"></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th>AGENCY/OFFICE:</th>
                <th><input autocomplete="password_new" type="text" placeholder="AGENCY/OFFICE"  v-model="formData.spouse_agency_name"></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th>OFFICE ADDRESS:</th>
                <th><input autocomplete="password_new" type="text" placeholder="OFFICE OFFICE" v-model="formData.spouse_agency_address"></th>
            </tr>
        </table>

        <p style="text-align:center"><u><b>UNMARRIED CHILDREN BELOW EIGHTEEN (18) YEARS OF AGE LIVING IN DECLARANT’S  HOUSEHOLD</b></u></p>
        <table style="width:100%">
            <tr>
                <th>NAME</th>
                <th>DATE OF BIRTH</th>
                <th>AGE</th>
                <th>
                    <button type="button" class="btn-green" @click="addUnmarriedChildren">ADD ROW</button>
                </th>
            </tr>
            <tr v-for="(item, index) in formData.unmarried_children" :key="index">
                <th><input autocomplete="password_new" type="text" style="width:90%" placeholder="NAME" v-model="formData.unmarried_children[index].name"></th>
                <th><input autocomplete="password_new" type="date" style="width:90%" placeholder="DATE OF BIRTH" v-model="formData.unmarried_children[index].date_birth"></th>
                <th><input autocomplete="password_new" type="text" style="width:90%" placeholder="AGE" v-model="formData.unmarried_children[index].age"></th>
                <th>
                    <button type="button" class="btn-red" @click="removeRow('unmarried_children', index)">REMOVE</button>
                </th>
            </tr>
        </table>
        <p style="text-align:center"><u><b>ASSETS, LIABILITIES AND NETWORTH</b></u></p>
        <p style="text-align:center"><u>(Including those of the spouse and unmarried children below eighteen (18) years of age living in declarant’s household)</u></p>
        <p>1.  ASSETS</p>
        <p>a.	Real Properties*</p>
        <table style="width:100%">
            <tr>
                <th>DESCRIPTION (e.g. lot, house and lot, condominium and improvements)</th>
                <th>KIND (e.g. residential, commercial, industrial, agricultural and mixed use)</th>
                <th>EXACT LOCATION</th>
                <th>ASSESSED VALUE</th>
                <th>CURRENT FAIR MARKET VALUE</th>
                <th>ACQUISITION YEAR</th>
                <th>ACQUISITION MODE</th>
                <th>ACQUISITION COST</th>
                <th>
                    <button type="button" class="btn-green" @click="addAssetRealRow">ADD ROW</button>
                </th>
            </tr>
            <tr v-for="(item, index) in formData.assets_real" :key="index">
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="DESCRIPTION" v-model="formData.assets_real[index].description"></td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="KIND" v-model="formData.assets_real[index].kind"></td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="LOCATION" v-model="formData.assets_real[index].location"></td>
                <td><input autocomplete="password_new" type="number" step="0.01" min="0" style="width:90%;text-align:right" placeholder="VALUE" v-model="formData.assets_real[index].assessed_value"></td>
                <td><input autocomplete="password_new" type="number" step="0.01" min="0" style="width:90%;text-align:right" placeholder="MARKET VALUE" v-model="formData.assets_real[index].market_value"></td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="YEAR" v-model="formData.assets_real[index].year"></td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="MODE" v-model="formData.assets_real[index].mode"></td>
                <td><input autocomplete="password_new" type="number" step="0.01" min="0" style="width:90%;text-align:right" placeholder="COST" v-model="formData.assets_real[index].cost"></td>
                <th>
                    <button type="button" class="btn-red" @click="removeRow('assets_real', index)">REMOVE</button>
                </th>
            </tr>
            <tr>
                <td colspan="7" style="text-align:right">SUBTOTAL</td>
                <td style="text-align:right">{{ totalRealProperties }}</td>
            </tr>
        </table>
        <p>b. Personal Properties*</p>
        <table style="width:100%">
            <tr>
                <th>DESCRIPTION</th>
                <th>YEAR ACQUIRED</th>
                <th>ACQUISITION COST/AMOUNT</th>
                <th>
                    <button type="button" class="btn-green" @click="addAssetPersonalRow">ADD ROW</button>
                </th>
            </tr>
            <tr v-for="(item, index) in formData.assets_personal" :key="index">
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="DESCRIPTION" v-model="formData.assets_personal[index].description"></td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="YEAR ACQUIRED" v-model="formData.assets_personal[index].year"></td>
                <td><input autocomplete="password_new" type="number" step="0.01" min="0" style="width:90%;text-align:right" placeholder="COST/AMOUNT" v-model="formData.assets_personal[index].cost"></td>
                <th>
                    <button type="button" class="btn-red" @click="removeRow('assets_personal', index)">REMOVE</button>
                </th>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right">SUBTOTAL</td>
                <td style="text-align:right">{{ totalPersonalProperties }}</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right">TOTAL ASSETS</td>
                <td style="text-align:right">{{ totalAssets }}</td>
            </tr>
        </table>
        <p>2.	LIABILITIES*</p>
        <table style="width:100%">
            <tr>
                <th>NATURE</th>
                <th>NAME OF CREDITORS</th>
                <th>OUTSTANDING BALANCE</th>
                <th>
                    <button type="button" class="btn-green" @click="addLiabilitiesRow">ADD ROW</button>
                </th>
            </tr>
            <tr v-for="(item, index) in formData.liabilities" :key="index">
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="NATURE" v-model="formData.liabilities[index].nature"></td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="CREDITORS" v-model="formData.liabilities[index].creditors"></td>
                <td><input autocomplete="password_new" type="number" step="0.01" min="0" style="width:90%;text-align:right" placeholder="OUTSTANDING BALANCE" v-model="formData.liabilities[index].outstanding_balance"></td>
                <th>
                    <button type="button" class="btn-red" @click="removeRow('liabilities', index)">REMOVE</button>
                </th>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right">SUBTOTAL</td>
                <td style="text-align:right">{{ totalLiabilies }}</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right">NET WORTH</td>
                <td style="text-align:right">{{ totalNetworth }}</td>
            </tr>
        </table>
        <p style="text-align:center"><u><b>BUSINESS INTERESTS AND FINANCIAL CONNECTIONS</b></u></p>
        <table style="width:100%">
            <tr>
                <th>NAME OF ENTITY/BUSINESS ENTERPRISE</th>
                <th>BUSINESS ADDRESS</th>
                <th>NATURE OF BUSINESS INTEREST &/OR FINANCIAL CONNECTION</th>
                <th>DATE OF ACQUISITION OF INTEREST OR CONNECTION</th>
                <th>
                    <button type="button" class="btn-green" @click="addBusinessInterestRow">ADD ROW</button>
                </th>
            </tr>
            <tr v-for="(item, index) in formData.business_interest" :key="index">
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="ENTITY" v-model="formData.business_interest[index].entity"></td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="ADDRESS" v-model="formData.business_interest[index].address"></td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="NATURE OF BUSINESS INTEREST" v-model="formData.business_interest[index].nature"></td>
                <td><input autocomplete="password_new" type="date" style="width:90%" placeholder="DATE OF ACQUISITION" v-model="formData.business_interest[index].date_acquired"></td>
                <th>
                    <button type="button" class="btn-red" @click="removeRow('business_interest', index)">REMOVE</button>
                </th>
            </tr>
        </table>
        <p style="text-align:center"><u><b>RELATIVES IN THE GOVERNMENT SERVICE</b></u></p>
        <table style="width:100%">
            <tr>
                <th>NAME OF RELATIVE</th>
                <th>RELATIONSHIP</th>
                <th>POSITION</th>
                <th>NAME OF AGENCY/OFFICE AND ADDRESS</th>
                <th>
                    <button type="button" class="btn-green" @click="addRelativesRow">ADD ROW</button>
                </th>
            </tr>
            <tr v-for="(item, index) in formData.relatives" :key="index">
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="NAME OF RELATIVE" v-model="formData.relatives[index].name"></td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="RELATIONSHIP" v-model="formData.relatives[index].relationship"></td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="POSITION" v-model="formData.relatives[index].position"></td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="NAME OF AGENCY" v-model="formData.relatives[index].agency"></td>
                <th>
                    <button type="button" class="btn-red" @click="removeRow('relatives', index)">REMOVE</button>
                </th>
            </tr>
        </table>
        <p>I hereby certify that these are true and correct statements of my assets, liabilities, net worth, business interests and financial connections, including those of my spouse and unmarried children below eighteen (18) years of age living in my household, and that to the best of my knowledge, the above-enumerated are names of my relatives in the government within the fourth civil degree of consanguinity or affinity. </p>
        <p>I hereby authorize the Ombudsman or his/her duly authorized representative to obtain and secure from all appropriate government agencies, including the Bureau of Internal Revenue such documents that may show my assets, liabilities, net worth, business interests and financial connections, to include those of my spouse and unmarried children below 18 years of age living with me in my household covering previous years to include the year I first assumed office in government.</p>
        <p>DATE: <input type="date" v-model="formData.date_completed"></p>
        <table style="width:100%">
            <tr>
                <th>DECLARANT</th>
                <th></th>
                <th>CO-DECLARANT/SPOUSE</th>
                <th></th>
            </tr>
            <tr>
                <td>Government Issued ID: </td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="DECLARANT ID" v-model="formData.declarant_valid_id"></td>
                <td>Government Issued ID: </td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="CO-DECLARANT ID" v-model="formData.codeclarant_valid_id"></td>
            </tr>
            <tr>
                <td>ID No.: </td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="DECLARANT ID No." v-model="formData.declarant_id_number"></td>
                <td>ID No.: </td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="CO-DECLARANT ID No." v-model="formData.codeclarant_id_number"></td>
            </tr>
            <tr>
                <td>Date Issued: </td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="DECLARANT DATE ISSUED" v-model="formData.declarant_id_date"></td>
                <td>Date Issued: </td>
                <td><input autocomplete="password_new" type="text" style="width:90%" placeholder="CO-DECLARANT DATE ISSUED" v-model="formData.codeclarant_id_date"></td>
            </tr>
        </table>
        <p>SUBSCRIBED AND SWORN to before me this  	 day of  	, affiant exhibiting to me the above-stated government issued identification card.</p>
        <button type="button" class="btn-green" @click="submitForm" :disabled="submit">Generate</button>
    </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!',
                formData: {
                    unmarried_children: [],
                    assets_real: [],
                    assets_personal: [],
                    liabilities: [],
                    business_interest: [],
                    relatives: [],
                },
                pageOne: [],
                pageTwo: [],
                childrenLimit: 4,
                assetsRealLimit: 3,
                assetsPersonalLimit: 5,
                liabilitiesLimit: 4,
                businessInterestLimit: 4,
                relativesLimit: 3,
                submit: false,
                // date: dayjs("12-25-1995", "Do"),
            },
            methods: {
                addUnmarriedChildren(){
                    let newChildren = {
                        name: "",
                        date_birth: "",
                        age: "",
                    };
                    this.formData.unmarried_children.push(newChildren);
                },
                addAssetRealRow(){
                    let newChildren = {
                        description: "",
                        kind: "",
                        location: "",
                        assessed_value: 0,
                        market_value: 0,
                        year: "",
                        mode: "",
                        cost: 0,
                    };
                    this.formData.assets_real.push(newChildren);
                },
                addAssetPersonalRow(){
                    let newChildren = {
                        description: "",
                        year: "",
                        cost: 0,
                    };
                    this.formData.assets_personal.push(newChildren);
                },
                addLiabilitiesRow(){
                    let newChildren = {
                        nature: "",
                        creditors: "",
                        outstanding_balance: 0,
                    };
                    this.formData.liabilities.push(newChildren);
                },
                addBusinessInterestRow(){
                    let newChildren = {
                        entity: "",
                        address: "",
                        nature: "",
                        date_acquired: "",
                    };
                    this.formData.business_interest.push(newChildren);
                },
                addRelativesRow(){
                    let newChildren = {
                        name: "",
                        relationship: "",
                        position: "",
                        agency: "",
                    };
                    this.formData.relatives.push(newChildren);
                },

                removeRow(prop, index){
                    this.formData[prop].splice(index, 1);
                },
                submitForm(){
                    this.submit = true;
                    let unmarried_children = _.chunk(this.formData.unmarried_children, this.childrenLimit);
                    let assets_real = _.chunk(this.formData.assets_real, this.assetsRealLimit);
                    let assets_personal = _.chunk(this.formData.assets_personal, this.assetsPersonalLimit);
                    let liabilities = _.chunk(this.formData.liabilities, this.liabilitiesLimit);
                    let business_interest = _.chunk(this.formData.business_interest, this.businessInterestLimit);
                    let relatives = _.chunk(this.formData.relatives, this.relativesLimit);
                    let formData = _.cloneDeep(this.formData);
                    let pageOneContents = [];
                    let pageTwoContents = [];
                    this.formData.totalRealProperties = this.totalRealProperties;
                    this.formData.totalPersonalProperties = this.totalPersonalProperties;
                    this.formData.totalAssets = this.totalAssets;
                    this.formData.totalLiabilies = this.totalLiabilies;
                    this.formData.totalNetworth = this.totalNetworth;
                    this.formData.date_completed_formatted = dayjs(this.formData.date_completed).format("MMMM D, YYYY");
                    this.formData.date_completed_day = dayjs(this.formData.date_completed).format("D");
                    this.formData.date_completed_month = dayjs(this.formData.date_completed).format("MMM YYYY");
                    let totals = {
                        totalRealProperties: this.totalRealProperties,
                        totalPersonalProperties: this.totalPersonalProperties,
                        totalAssets: this.totalAssets,
                        totalLiabilies: this.totalLiabilies,
                        totalNetworth: this.totalNetworth,
                    }
                    for (let index = 0; index < this.numOfPageOne; index++) {
                        if(index == 0){
                            pageOneContents.push({
                                ...this.formData,
                                unmarried_children: unmarried_children[index] === undefined ? [] : unmarried_children[index],
                                assets_real: assets_real[index] === undefined ? [] : assets_real[index],
                                assets_personal: assets_personal[index] === undefined ? [] : assets_personal[index],
                            });
                        }else{
                            pageOneContents.push({
                                ...totals,
                                unmarried_children: unmarried_children[index] === undefined ? [] : unmarried_children[index],
                                assets_real: assets_real[index] === undefined ? [] : assets_real[index],
                                assets_personal: assets_personal[index] === undefined ? [] : assets_personal[index],
                            });
                        }
                    }
                    for (let index = 0; index < this.numOfPageTwo; index++) {
                        if(index == 0){
                            pageTwoContents.push({
                                ...this.formData,
                                liabilities: liabilities[index] === undefined ? [] : liabilities[index],
                                business_interest: business_interest[index] === undefined ? [] : business_interest[index],
                                relatives: relatives[index] === undefined ? [] : relatives[index],
                            });
                        }else{
                            pageTwoContents.push({
                                ...totals,
                                liabilities: liabilities[index] === undefined ? [] : liabilities[index],
                                business_interest: business_interest[index] === undefined ? [] : business_interest[index],
                                relatives: relatives[index] === undefined ? [] : relatives[index],
                            });
                        }
                    }
                    axios.post('/input-json', {pageOneContents,pageTwoContents}, {
                        headers: {
                            'Content-Type': 'XMLHttpRequest'
                        }
                    }).then(res => {
                        console.log(res.data.filename);
                        window.location.href = `http://saln.test/pdf?file=${res.data.filename}`;
                        this.submit = false;
                    }).catch(err => {
                        this.submit = false;
                    })
                }
            },
            computed: {
                numOfUnmarriedChildrenPage() {
                    let limit = 4;
                    if(this.formData.unmarried_children.length % this.childrenLimit == 0){
                        return this.formData.unmarried_children.length / this.childrenLimit;
                    }else{
                        return parseInt(this.formData.unmarried_children.length / this.childrenLimit) + 1;
                    }
                },
                numOfAssetsRealPage() {
                    let limit = 3;
                    if(this.formData.assets_real.length % this.assetsRealLimit == 0){
                        return this.formData.assets_real.length / this.assetsRealLimit;
                    }else{
                        return parseInt(this.formData.assets_real.length / this.assetsRealLimit) + 1;
                    }
                },
                numOfAssetsPersonalPage() {
                    let limit = 5;
                    if(this.formData.assets_personal.length % this.assetsPersonalLimit == 0){
                        return this.formData.assets_personal.length / this.assetsPersonalLimit;
                    }else{
                        return parseInt(this.formData.assets_personal.length / this.assetsPersonalLimit) + 1;
                    }
                },
                numOfLiabilitiesPage() {
                    let limit = 4;
                    if(this.formData.liabilities.length % this.liabilitiesLimit == 0){
                        return this.formData.liabilities.length / this.liabilitiesLimit;
                    }else{
                        return parseInt(this.formData.liabilities.length / this.liabilitiesLimit) + 1;
                    }
                },
                numOfBusinessInterestPage() {
                    let limit = 4;
                    if(this.formData.business_interest.length % this.businessInterestLimit == 0){
                        return this.formData.business_interest.length / this.businessInterestLimit;
                    }else{
                        return parseInt(this.formData.business_interest.length / this.businessInterestLimit) + 1;
                    }
                },
                numOfRelativesPage() {
                    let limit = 3;
                    if(this.formData.relatives.length % this.relativesLimit == 0){
                        return this.formData.relatives.length / this.relativesLimit;
                    }else{
                        return parseInt(this.formData.relatives.length / this.relativesLimit) + 1;
                    }
                },
                numOfPageOne(){
                    return Math.max(this.numOfUnmarriedChildrenPage, this.numOfAssetsRealPage, this.numOfAssetsPersonalPage, 1);
                },
                numOfPageTwo(){
                    return Math.max(this.numOfLiabilitiesPage, this.numOfBusinessInterestPage, this.numOfRelativesPage, 1);
                },
                totalRealProperties(){
                    let total = this.formData.assets_real.reduce((accumulator, currentValue) => {
                        return accumulator + parseInt(currentValue.cost);
                    }, 0);
                    return isNaN(total) ? 0 : total;
                },          
                totalPersonalProperties(){
                    let total = this.formData.assets_personal.reduce((accumulator, currentValue) => {
                        return accumulator + parseInt(currentValue.cost);
                    }, 0);
                    return isNaN(total) ? 0 : total;
                },
                totalAssets(){
                    return (this.totalRealProperties + this.totalPersonalProperties);
                },
                totalLiabilies(){
                    let total = this.formData.liabilities.reduce((accumulator, currentValue) => {
                        return accumulator + parseInt(currentValue.outstanding_balance);
                    }, 0);
                    return isNaN(total) ? 0 : total;
                },
                totalLiabilies(){
                    let total = this.formData.liabilities.reduce((accumulator, currentValue) => {
                        return accumulator + parseInt(currentValue.outstanding_balance);
                    }, 0);
                    return isNaN(total) ? 0 : total;
                },
                totalNetworth(){
                    return (this.totalAssets - this.totalLiabilies);
                }
            }
        })
    </script>
</body>
</html>