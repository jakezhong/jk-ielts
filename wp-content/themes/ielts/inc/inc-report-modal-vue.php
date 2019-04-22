<?php global $type; ?>
<div class="report-modal">
    <b-modal id="report-form-modal" title="<?php the_title(); ?>" size="xl">

    <?php
        if( $type[0]->slug == 'listening' ) :
        // Display the Listening form
    ?>
        <template>
            <div>
                <div class="main-report">
                    <table>
                        <tr>
                            <th>名字</th>
                            <th>第几遍做</th>
                            <th>完成度</th>
                            <th>S1 (10)</th>
                            <th>S2 (10)</th>
                            <th>S3 (10)</th>
                            <th>S4 (10)</th>
                            <th>对题数 (40)</th>
                            <th>分数</th>
                            <th>满意度</th>
                            <th>精听/解析</th>
                            <th>不懂题目</th>
                            <th>提问问题</th>
                        </tr>
                        <tr>
                            <td>{{ form.name }}</td>
                            <td>{{ form.amount }}</td>
                            <td v-bind:class="addClass(form.completion)"></td>
                            <td>{{ form.s1 }}</td>
                            <td>{{ form.s2 }}</td>
                            <td>{{ form.s3 }}</td>
                            <td>{{ form.s4 }}</td>
                            <td>{{ calcRight([
                                    form.s1,
                                    form.s2,
                                    form.s3,
                                    form.s4
                                ]) }}</td>
                            <td>{{ calcScore() }}</td>
                            <td v-bind:class="addClass(form.satisfaction)"></td>
                            <td v-bind:class="addClass(form.review)"></td>
                            <td><span v-for="(problem, index) in form.problems">{{ index !== 0 ? ', ' : '' }}{{ problem }}</span></td>
                            <td class="content-main">{{ form.questions }}</td>
                        </tr>
                    </table>
                </div>

                <form @submit="onSubmit" @reset="onReset" class="report-form">
                    <b-form-group label="名字" label-for="report-name"
                    >
                        <b-form-input
                            id="report-name"
                            v-model="form.name"
                            type="text"
                            name="username"
                            required></b-form-input>
                    </b-form-group>

                    <b-form-group
                        label="第几遍做" label-for="report-amount">
                        <b-form-select
                            id="report-amount"
                            v-model="form.amount"
                            name="amount"
                            :options="[
                                {text: '请选择', value: null},
                                {text: '1', value: 1},
                                {text: '2', value: 2},
                                {text: '3', value: 3},
                                {text: '4', value: 4},
                                {text: '5次或以上', value: 5},

                            ]"
                            required></b-form-select>
                    </b-form-group>

                    <b-form-group label="完成度" label-for="report-completion">
                        <b-form-select
                            id="report-completion"
                            v-model="form.completion"
                            name="completion"
                            :options="finished"
                            required></b-form-select>
                    </b-form-group>

                    <b-form-group
                        label="S1对题数" label-for="report-s1">
                        <b-form-select
                            id="report-s1"
                            v-model="form.s1"
                            name="s1"
                            :options="questionsRange(0,10,'请选择')"
                            required></b-form-select>
                    </b-form-group>

                    <b-form-group label="S2对题数" label-for="report-s2">
                        <b-form-select
                            id="report-s2"
                            v-model="form.s2"
                            name="s2"
                            :options="questionsRange(0,10,'请选择')"
                            required></b-form-select>
                    </b-form-group>

                    <b-form-group label="S3对题数" label-for="report-s3">
                        <b-form-select
                            id="report-s3"
                            v-model="form.s3"
                            name="s3"
                            :options="questionsRange(0,10,'请选择')"
                            required></b-form-select>
                    </b-form-group>

                    <b-form-group label="S4对题数" label-for="report-s4">
                        <b-form-select
                            id="report-s4"
                            v-model="form.s4"
                            name="s4"
                            :options="questionsRange(0,10,'请选择')"
                            required></b-form-select>
                    </b-form-group>

                    <b-form-group label="满意度" label-for="report-satisfaction">
                        <b-form-select
                            id="report-satisfaction"
                            v-model="form.satisfaction"
                            name="satisfaction"
                            :options="satisfaction"></b-form-select>
                    </b-form-group>

                    <b-form-group label="解析/精听" label-for="report-review">
                        <b-form-select
                            id="report-review"
                            v-model="form.review"
                            name="review"
                            :options="finished"></b-form-select>
                    </b-form-group>
                
                    <b-form-group label="不懂题目" label-for="report-problems">
                        <b-form-checkbox-group
                            id="report-problems"
                            v-model="form.problems"
                            name="problems"
                            :options="questionsRange(1,40,'')"></b-form-checkbox-group>
                    </b-form-group>

                    <b-form-group label="提问问题" label-for="report-questions">
                        <b-form-textarea
                            id="report-questions"
                            name="questions"
                            v-model="form.questions"></b-form-textarea>
                    </b-form-group>

                    <b-button type="reset" variant="danger">Reset</b-button>
                    <b-button type="submit" variant="primary">Submit</b-button>
                    
                </borm>
            </div>
        </template>

        <hidden-property v-bind:permalink="<?php the_permalink(); ?>"></hidden-property>

    <?php
        elseif( $type[0]->slug =='reading' ) :
    ?>
        <template>
            <div>
                <div class="main-report">
                    <table>
                        <tr>
                            <th>名字</th>
                            <th>第几遍做</th>
                            <th>完成度</th>
                            <th>P1 (13)</th>
                            <th>P2 (13)</th>
                            <th>P3 (14)</th>
                            <th>对题数 (40)</th>
                            <th>分数</th>
                            <th>错题</th>
                            <th>满意度</th>
                            <th>细读/解析</th>
                            <th>不懂题目</th>
                            <th>提问问题</th>
                        </tr>
                        <tr>
                            <td>{{ form.name }}</td>
                            <td>{{ form.amount }}</td>
                            <td v-bind:class="addClass(form.completion)"></td>
                            <td>{{ form.p1 }}</td>
                            <td>{{ form.p2 }}</td>
                            <td>{{ form.p3 }}</td>
                            <td>{{ form.right }}</td>
                            <td>{{ form.result }}</td>
                            <td>{{ form.wrong }}</td>
                            <td v-bind:class="addClass(form.satisfaction)"></td>
                            <td v-bind:class="addClass(form.review)"></td>
                            <td>{{ form.problems }}</td>
                            <td class="content-main">{{ form.questions }}</td>
                        </tr>
                    </table>
                </div>
                <b-form @submit="onSubmit" @reset="onReset" class="report-form">
                    <b-form-group label="名字" label-for="report-name"
                    >
                        <b-form-input
                            id="report-name"
                            v-model="form.name"
                            type="text"
                            required></b-form-input>
                    </b-form-group>

                    <b-form-group label="第几遍做" label-for="report-times">
                        <b-form-input
                            id="report-times"
                            v-model="form.times"
                            required></b-form-input>
                    </b-form-group>

                    <b-form-group label="完成度" label-for="report-completion">
                        <b-form-select
                            id="report-completion"
                            v-model="form.completion"
                            :options="finished"
                            required></b-form-select>
                    </b-form-group>

                    <b-form-group
                        label="S1对题数" label-for="report-s1">
                        <b-form-select
                            id="report-s1"
                            v-model="form.s1"
                            :options="questionsRange(1,10,'请选择')"
                            required></b-form-select>
                    </b-form-group>

                    <b-form-group label="S2对题数" label-for="report-s2">
                        <b-form-select
                            id="report-s2"
                            v-model="form.s2"
                            :options="questionsRange(11,20,'请选择')"
                            required></b-form-select>
                    </b-form-group>

                    <b-form-group label="S3对题数" label-for="report-s3">
                        <b-form-select
                            id="report-s3"
                            v-model="form.s3"
                            :options="questionsRange(21,30,'请选择')"
                            required></b-form-select>
                    </b-form-group>

                    <b-form-group label="S4对题数" label-for="report-s4">
                        <b-form-select
                            id="report-s4"
                            v-model="form.s4"
                            :options="questionsRange(31,40,'请选择')"
                            required></b-form-select>
                    </b-form-group>

                    <b-form-group label="满意度" label-for="report-satisfaction">
                        <b-form-select
                            id="report-satisfaction"
                            v-model="form.satisfaction"
                            :options="satisfaction"></b-form-select>
                    </b-form-group>

                    <b-form-group label="不懂题目" label-for="report-problems">
                        <b-form-checkbox-group
                            id="report-problems"
                            v-model="form.problems"
                            name="problems"
                            :options="questionsRange(1,40,'')"></b-form-checkbox-group>
                    </b-form-group>

                    <b-form-group label="提问问题" label-for="report-questions">
                        <b-form-textarea
                            id="report-questions"
                            name="questions"
                            v-model="form.questions"></b-form-textarea>
                    </b-form-group>
                    <b-button type="reset" variant="danger">Reset</b-button>
                    <b-button type="submit" variant="primary">Submit</b-button>
                </b-form>
            </div>
        </template>
    <?php
        endif;
    ?>
    </b-modal>
</div>