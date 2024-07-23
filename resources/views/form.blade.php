<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}" />
    </head>

    <body>
        <div class="formbold-main-wrapper">
            <div class="formbold-form-wrapper">
                <form action="{{ route('form.store') }}" method="POST">
                    @csrf
                    <div class="formbold-input-wrapp formbold-mb-3">
                        <label for="firstname" class="formbold-form-label">
                            Nama
                        </label>

                        <div>
                            <input
                                type="text"
                                name="first_name"
                                id="namadepan"
                                placeholder="Nama depan"
                                class="formbold-form-input"
                            />

                            <input
                                type="text"
                                name="last_name"
                                id="namabelakang"
                                placeholder="Nama belakang"
                                class="formbold-form-input"
                            />
                        </div>
                    </div>

                    <div class="formbold-mb-3">
                        <label for="age" class="formbold-form-label">
                            Umur
                        </label>
                        <input
                            type="text"
                            name="age"
                            id="umur"
                            placeholder="ex:25"
                            class="formbold-form-input"
                        />
                    </div>

                    <div class="formbold-mb-3">
                        <label for="dob" class="formbold-form-label">
                            Tempat Tanggal Lahir
                        </label>
                        <input
                            type="date"
                            name="birthday"
                            id="dob"
                            class="formbold-form-input"
                        />
                    </div>

                    <div class="formbold-mb-3">
                        <label class="formbold-form-label">Jenis Kelamin</label>

                        <select
                            class="formbold-form-input"
                            name="gender"
                            id="occupation"
                        >
                            <option value="male">Laki-laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                    </div>

                    <div class="formbold-mb-3">
                        <label for="email" class="formbold-form-label">
                            Email
                        </label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="example@email.com"
                            class="formbold-form-input"
                        />
                    </div>

                    <div class="formbold-mb-3">
                        <label for="address" class="formbold-form-label">
                            Alamat
                        </label>

                        <input
                            type="text"
                            name="address"
                            id="alamat"
                            placeholder="Alamat Rumah"
                            class="formbold-form-input formbold-mb-3"
                        />

                        <div class="formbold-mb-3 formbold-input-wrapp">
                            <label for="phone" class="formbold-form-label">
                                Phone
                            </label>

                            <input
                                type="text"
                                name="phone_number"
                                id="phone"
                                placeholder="Phone number"
                                class="formbold-form-input"
                            />
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div>
                            <label for="city" class="formbold-form-label">
                                Kota
                            </label>
                            <input
                                type="text"
                                name="city"
                                id="city"
                                placeholder="ex: Yogyakarta"
                                class="formbold-form-input"
                            />
                        </div>
                    </div>

                    <div class="formbold-mb-3">
                        <label for="cv" class="formbold-form-label"> Unggah CV </label>
                        <input
                          type="file"
                          name="cv"
                          id="cv"
                          class="formbold-form-input"
                          accept=".pdf,.doc,.docx"
                          required
                        />
                    </div>

                    
                    <div class="formbold-checkbox-wrapper">
                        <label
                            for="supportCheckbox"
                            class="formbold-checkbox-label"
                        >
                            <div class="formbold-relative">
                                <input
                                    type="checkbox"
                                    id="supportCheckbox"
                                    class="formbold-input-checkbox"
                                />
                                <div class="formbold-checkbox-inner">
                                    <span class="formbold-opacity-0">
                                        <svg
                                            width="11"
                                            height="8"
                                            viewBox="0 0 11 8"
                                            class="formbold-stroke-current"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M8.81868 0.688604L4.16688 5.4878L2.05598 3.29507C1.70417 2.92271 1.1569 2.96409 0.805082 3.29507C0.453266 3.66742 0.
                      492357 4.24663 0.805082 4.61898L3.30689 7.18407C3.54143 7.43231 3.85416 7.55642 4.16688 7.55642C4.47961 7.55642 4.79233 7.
                      43231 5.02688 7.18407L10.0696 2.05389C10.4214 1.68154 10.4214 1.10233 10.0696 0.729976C9.71776 0.357624 9.17049 0.357625 8.
                      81868 0.688604Z"
                                                fill="white"
                                            />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            I agree to the defined
                            <a href="#"> terms, conditions, and policies</a>
                        </label>
                    </div>
                    <br />
                    <a href="ourpeople" class="formbold-rst">Back</a>
                    <button type="submit" class="formbold-btn">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
