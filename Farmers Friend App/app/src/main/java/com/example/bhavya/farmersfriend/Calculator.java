package com.example.bhavya.farmersfriend;

import android.app.Fragment;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

/**
 * Created by bhavya on 12/11/17.
 */

public class Calculator extends Fragment {

    View Cal;
    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, @Nullable ViewGroup container, Bundle savedInstanceState) {
        Cal = inflater.inflate(R.layout.calculator, container, false);
        return Cal;
    }
}
